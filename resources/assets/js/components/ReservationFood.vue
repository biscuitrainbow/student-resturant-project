<script>
export default {
      props: ['menus'],
      data: function() {
             return {
                 selectedFood: []
             }
      },
      methods: {
            add: function (food) {
                food.qty = 1;
                this.selectedFood.push(food);
            }
     }

}
</script>
