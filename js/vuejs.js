 //--  Ciclo de Vida

let app = new Vue ({
    el:'#app',
    data: {
        nome:'Lindona que é ?',
    },
    methods:{
        alterarNome() {
            this.nome= 'Daniele';
        },
        destruirIntancia() {
            app.$destroy()
        }
    },
    beforeCreate() {
        console.log('Antes de Criar');
    },
    created() { //uma das partes do cliclo da instância
        console.log('Criando');
    },
    mounted () { 
        console.log('Instância foi montada');
    },
    updated() {
        console.log('Instância atualizada');
    },    
    destroyed() {
        console.log('Instância foi destruida');
    }
});


//--   Componentes e Animação
Vue.component('componente-dani', {
    data: function() {
        return {
            jogos: [
                { nome: 'Eu sou inteligente' },
                { nome: 'Eu sou linda' },
                { nome: 'Vou vencer' },
                { nome: 'Deus é pai' },
            ],
        };
    },
    template: ` <div><div class="jogo" v-for="item in jogos"> 
                  <p> {{ item.nome }} </p>
                </div></div>`,
});
let comp= new Vue({
    el:"#comp",
    data: {
        titulo:'Meus Jogos Favoritos',
        bounce: false,
        // jogos: [
        //     { nome: 'Eu sou inteligente' },
        //     { nome: 'Eu sou linda' },
        //     { nome: 'Vou vencer' },
        //     { nome: 'Deus é pai' },
        // ],
    },
});

//-- COMPONENTES DENTRO DE COMPONENTES

Vue.component('componentePai', {
    template: `<div><p>Texto do componete pai</p>
                    <componente-filho></componente-filho>
               </div>`
});

Vue.component('componenteFilho', {
    template: `<div><p>Texto do componete Filho</p></div>`
});
let dentrocomponente = new Vue({
    el:'#dentrocomponente',
    component: [
        'componentepai',
        'componentefilho',
    ]
});
