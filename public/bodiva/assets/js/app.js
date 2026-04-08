 







 new Vue({
    el: '#app',
    data: {
        users: [2,3,4,5],
        subscriber:{},
    },
    mounted() {
        
    },
    methods: {

      subscrever(){

        const options = {
  method: 'POST', 
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify(this.subscriber)
};

Swal.fire({
  title: "Pretendes receber nossos Newsletters?",
  showDenyButton: true,
  focusConfirm: false,
  showCancelButton: true, 
  confirmButtonText: "Sim",
  confirmButtonColor: "#2dce89",
  cancelButtonText:'Cancelar',
  denyButtonText: `Não`
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {


      axios.post('https://chat.bodiva.ao/api/subscribers',this.subscriber).then(response=>{

         //   alert('Registro feito com sucessso!...')
        /*    Swal.fire({
  position: "top-end",
  icon: "success",
  title: "Registro feito com sucessso!...",
  showConfirmButton: false,
  timer: 1500
});*/

Swal.fire({
  title: "Obrigado",
  html: "Registro feito com sucessso! <br> <br> Verifique a sua caixa de email.",
  confirmButtonColor: "#2dce89",
  focusConfirm: false, 
  icon: "success"
});



            this.subscriber={};

        }).catch(error=>{
          alert('Houve um erro!');
        })

   

    
  } else if (result.isDenied) {
    //Swal.fire("Obrigado. Seu registro não foi efectuado", "", "info");

    Swal.fire({
  title: "Obrigado",
  text: "Seu registro não foi efectuado!",
  confirmButtonColor: "#2dce89",
  focusConfirm: false,
  icon: "info"
});
  }
});

      
    

      },
         
    }
});