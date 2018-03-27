<script>
export default {
  props: ["menus", "member", "accumulate"],
  data: function() {
    return {
      netPrice: 0,
      totalPrice: 0,
      selectedFood: []
    };
  },
  methods: {
    add: function(food) {
      if (this.member == 1) {
        if (food.type.name !== "อาหารชุด" && food.type.name !== "เครื่องดื่ม") {
          this.netPrice += food.price - food.price * 0.1;
          this.totalPrice += food.price;
          food.discount = food.price * 0.1;
        } else {
          this.netPrice += food.price;
          this.totalPrice += food.price;
          food.discount = 0;
        }
      } else {
        this.netPrice += food.price;
        this.totalPrice += food.price;
        food.discount = 0;
      }

      food.qty = 1;
      this.selectedFood.push(food);
    },

    increase: function(food) {
      food.qty++;

      if (this.member == 1) {
        if (food.type.name !== "อาหารชุด" && food.type.name !== "เครื่องดื่ม") {
          this.netPrice += food.price - food.price * 0.1;
          this.totalPrice += food.price;
        } else {
          this.netPrice += food.price;
          this.totalPrice += food.price;
        }
      } else {
        this.netPrice += food.price;
        this.totalPrice += food.price;
      }
    },

    decrease: function(food) {
      food.qty--;

      if (this.member == 1) {
        if (food.type.name !== "อาหารชุด" && food.type.name !== "เครื่องดื่ม") {
          this.netPrice -= food.price - food.price * 0.1;
          this.totalPrice -= food.price;
        } else {
          this.netPrice -= food.price;
          this.totalPrice -= food.price;
        }
      } else {
        this.netPrice -= food.price;
        this.totalPrice -= food.price;
      }
    }
  }
};
</script>
