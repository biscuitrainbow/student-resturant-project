<script>
export default {
  props: ["menus", "member", "accumulate"],
  data: function() {
    return {
      searchString: "",
      netPrice: 0,
      totalPrice: 0,
      selectedFood: []
    };
  },
  computed: {
    filteredFood: function() {
      var menu_array = this.menus,
        searchString = this.searchString;

      if (!searchString) {
        return menu_array;
      }

      searchString = searchString.trim().toLowerCase();

      menu_array = menu_array.filter(function(item) {
        if (item.name.toLowerCase().indexOf(searchString) !== -1) {
          return item;
        }
      });

      return menu_array;
    }
  },
  methods: {
    add: function(food) {
      if (this.selectedFood.indexOf(food) < 0) {
        console.log("Add");

        if (this.member == 1) {
          if (food.promotion == 1) {
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
      } else {
        console.log("Increse");
        this.increase(food);
      }
    },

    increase: function(food) {
      food.qty++;

      if (this.member == 1) {
        if (food.promotion == 1) {
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
        if (food.promotion == 1) {
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
    },
    remove(index, food) {
      this.selectedFood.splice(index, 1);

      console.log(food);

      if (this.member == 1) {
        if (food.promotion == 1) {
          this.netPrice -= (food.price - food.price * 0.1) * food.qty;
          this.totalPrice -= food.price * food.qty;
        } else {
          this.netPrice -= food.price * food.qty;
          this.totalPrice -= food.price * food.qty;
        }
      } else {
        this.netPrice -= food.price * food.qty;
        this.totalPrice -= food.price * food.qty;
      }
    }
  }
};
</script>
