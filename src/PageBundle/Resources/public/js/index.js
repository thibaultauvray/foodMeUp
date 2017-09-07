Vue.use(VueResource);
Vue.component('modal', {
    template: '#modal-template'
})

var ZaffriModal = Vue.component('zaffri-modal', {
    template: "#zaffri-modal-template",
    props: ['data'],
    methods: {
        closeModal: function(action = null) {
            this.data.visible = false;
            console.log("Modal action = " + action);
        }
    }
});


var app = new Vue({
    el: '#app',
    delimiters: ['${', '}'],

    data: {
        showModal: false,
        counter: 0,
        success: false,
        error: false,
        message: '',
        input: '',
        ingredients: [
        ],
        itemPerPage: 40,
        resultCount: 0,
        searchData: false,
        currentPage: 1,
        nbEntity: 0,
        nbPage: 0,
        noResultat: false,
        loaded: false
    },
    beforeCreate: function(){
    },
    created: function(){
        window.addEventListener('keyup', this.closeModal);

    },
    mounted: function(){
        this.setContent();
    },
    updated: function(){

    },
    methods: {
        updateImage: function(){
            var file = this.$refs.file.files[0];
            var reader  = new FileReader();
            var divMsg =   document.querySelector('#messageFile');

            if (file) {
                reader.readAsDataURL(file);
            }
            var id = this.ingredients[this.counter].id;
            var func = this.$http;
            reader.addEventListener("load", function(){
                var result = reader.result;
                var base64 = result.split(',')[1];
                var urlUpdateImage = Routing.generate('updateImage', { id: id });
                func.post(urlUpdateImage, {
                    url: base64
                }, function (data, status, request) {
                    console.log(data);
                    console.log(status);

                }).then(function(response){
                    divMsg.className = "alert alert-success";
                    divMsg.innerHTML = "<p>Image enregistré</p>";

                }).catch(function(e){
                    divMsg.className = "alert alert-danger";
                    divMsg.innerHTML = "<p>Une erreur est survenu (Jpg, Fichier trop lourd)</p>";
                });
            }, false);
        },
        updateAjaxImage: function(){

        },
        closeModal: function(e){
          if (e.keyCode == 27)
              this.showModal = false;
        },
        setContent: function(){
            var self = this;
            var urlAllIngredient = Routing.generate('allIngredients', { itemPerPage: this.itemPerPage, nbPage: this.currentPage });
            this.$http({ url: urlAllIngredient, method: 'GET' }).then(function(response) {
                self.ingredients = response.data;
                this.loaded = true;
            });
            var urlNbIngredient = Routing.generate('nbIngredient');
            this.$http({url: urlNbIngredient, method: 'GET'}).then(function(response){
                this.nbEntity = response.data;
                this.nbPage = Math.ceil(this.nbEntity / this.itemPerPage);
            });
        },
        setPage: function(pageNumber) {
            this.currentPage = pageNumber;
            this.setContent();

        },
        handler: function(show, index) {
            this.counter = index;
            this.showModal = true;
        },
        search: function(e)
        {
            if (this.input.trim() == "")
            {
                this.setContent();
                this.searchData = false;
                this.noResultat = false;

                return;
            }
             // Minimal recherche for opti support
                var url = Routing.generate('searchIngredients', {
                    'name': this.input,
                });
                this.$http({ url: url, method: 'GET' }).then(function(response) {
                    this.nbEntity = response.data.length;
                    this.searchData = true;
                    this.noResultat = false;
                    this.nbPage = Math.ceil(this.nbEntity / this.itemPerPage);
                    this.ingredients = response.data;
                }).catch(function(response){
                    console.log("No resultat");
                    this.noResultat = true;
                    this.searchData = true;
                    this.nbEntity = 0;
                    this.nbPage = 0;
                    this.ingredients = [];
                });
        },
        fillData: function ()
        {

        }
    }
});
