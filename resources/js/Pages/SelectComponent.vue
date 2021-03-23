<template>
  <span v-if="checkIfString " >
      {{monthPercentage}}
  </span>
  <span v-else-if="monthPercentage >= 0  && options == 'last-month' && !checkIfString " class="text-success mr-4">
    <i class="fa fa-arrow-up"></i>
    {{monthPercentage}}%
  </span>
  <span v-else-if="options == 'last-month'" class="text-warning mr-4">
    <i class="fa fa-arrow-down"></i>
    {{monthPercentage}}%
  </span>

  <span v-if=" checkIfString " >
      {{weekPerncentage}}
  </span>
  <span v-else-if="weekPercentage >= 0  && options == 'last-week'" class="text-success mr-4">
    <i class="fa fa-arrow-up"></i>
    {{weekPercentage}}%
  </span>
  <span v-else-if="options == 'last-week'" class="text-warning mr-4">
    <i class="fa fa-arrow-down"></i>
    {{weekPercentage}}%
  </span>

  <span v-if="yearPercentage >= 0 && options == 'last-year'" class="text-success mr-4">
    <i class="fa fa-arrow-up"></i>
    {{yearPercentage}}%
  </span>
  <span v-else-if="options == 'last-year'" class="text-warning mr-4">
    <i class="fa fa-arrow-down"></i>
    {{yearPercentage}}%
  </span>

  <div class="custom-flex">
    <select @change="checkIfString" v-model="options"  class="form-control pt-0">
      <option value="last-week" class>Since Last Week</option>
      <option value="last-month" class>Since Last Month</option>
      <option value="last-year" class>Since Last Year</option>
    </select>

    <i class="fas fa-chevron-down arrow-down"></i>
  </div>

  <!-- </form> -->
</template>


<script>

export default {
  props: ['monthPercentage', 'options' , 'weekPercentage', 'yearPercentage'],
  data() {
    return {
      options: "last-month",
      yearPercentage: -2
    };
  },
  computed: {
      checkIfString() {
          let percentages = [this.yearPercentage, this.weekPercentage, this.monthPercentage];
          let stringArray =  percentages.filter(item => isNaN(item))

          let numberArray =  percentages.filter(item => !isNaN(item))

          let parsedIntArray =  numberArray.map( (item) => parseInt(item))

      

          // let arrayOfString =  stringArray.filter(item => typeof item == "string")

          // arrayOfString = []
          // if (arrayOfString.length <= 0 ){
          //   return false;
          // } else {
          //   return true;
          // }

      }

  }
//   methods: {
//     onchange(options) {
//       this.options = options;
//     }
//   }
};
</script>

