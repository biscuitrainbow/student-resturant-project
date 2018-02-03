<script>
export default {
      props: ['menus','member'],
      data: function() {
             return {
                 netPrice : 0,
                 totalPrice: 0,
                 selectedFood: []
             }
      },
      methods: {
            add: function (food) {
                food.qty = 1;
                this.netPrice += food.price * food.qty;
                this.selectedFood.push(food);

                this.totalPrice += food.price;

                if(this.member == 1){
                    // if(!this.food.type.name === "อาหารชุด" || !this.food.type.name === "เครื่องดื่ม"){
                        let discountPrice = food.price * .10;
                        this.netPrice = this.netPrice - discountPrice;
                    // }
                }

            },

            increase : function(food){
                food.qty++;

                this.netPrice += food.price;
                this.totalPrice += food.price;

                if(this.member == 1){
                    // if(!this.food.type.name === 'อาหารชุด' || !this.food.type.name === 'เครื่องดื่ม'){
                        let discountPrice = (food.price * .10);
                        this.netPrice = this.netPrice - discountPrice;
                    //}
                }


            },

            decrease : function(food){
                food.qty--
                
                this.netPrice -= food.price;
                his.totalPrice += food.price;

                    if(this.member == 1){
                //  if(!this.food.type.name === 'อาหารชุด' || !his.food.type.name === 'เครื่องดื่ม'){

                        let discountPrice = (food.price * .10);
                        this.netPrice = this.netPrice + discountPrice;

                    }
            }
     }

}
</script>
