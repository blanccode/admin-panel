<template>
  <!-- <span v-if="checkIfString " >
      {{checkIfString}}
  </span> -->
  <span v-if="monthPercentage >= 0  && options === 'last-month' && !checkMonthIsString()  " class="text-success mr-4">
    <i class="fa fa-arrow-up"></i>
    {{monthPercentage}}%
  </span>
  <span v-else-if="options === 'last-month' && !checkMonthIsString()" class="text-warning mr-4">
    <i class="fa fa-arrow-down"></i>
    {{monthPercentage}}%
  </span>

  <span v-else-if="options === 'last-month' && checkMonthIsString() " >
      {{monthPercentage}}
  </span>

  <span v-else-if="weekPercentage >= 0  && options === 'last-week' && !checkWeekIsString()" class="text-success mr-4">
    <i class="fa fa-arrow-up"></i>
    {{weekPercentage}}%
  </span>
  <span v-else-if="options === 'last-week' && !checkWeekIsString()" class="text-warning mr-4">
    <i class="fa fa-arrow-down"></i>
    {{weekPercentage}}%
  </span>

  <span v-else-if=" options === 'last-week' &&  checkWeekIsString() " >
      {{weekPercentage}}
  </span>

  <span v-if="yearPercentage >= 0 && options === 'last-year' && !checkYearIsString()" class="text-success mr-4">
    <i class="fa fa-arrow-up"></i>
    {{yearPercentage}}%
  </span>
  <span v-else-if="options === 'last-year'  && !checkYearIsString()" class="text-warning mr-4">
    <i class="fa fa-arrow-down"></i>
    {{yearPercentage}}%
  </span>
  <span v-else-if="options === 'last-year'  && checkYearIsString() " >
      {{yearPercentage}}
  </span>

  <div class="custom-flex">
    <select  v-model="options"  class="form-control pt-0">
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
  methods: {
      checkMonthIsString() {
          let percentagesArray = [this.monthPercentage];
        

          // let stringArray =  percentagesArray.filter(item => isNaN(item))

          let stringArray =  percentagesArray.filter(item => !isNaN(item))
          let parsedIntArray =  stringArray.filter( (item) => !parseInt(item))
          // let arrayOfString =  parsedIntArray.filter(item => typeof item == "string")
          console.log(parsedIntArray);

          if (stringArray.length <= 0 ) return false;

          return true;

      },
      checkWeekIsString() {
          let percentagesArray = [this.weekPercentage];
        

          let stringArray =  percentagesArray.filter(item => !isNaN(item))
          let parsedIntArray =  stringArray.filter( (item) => !parseInt(item))
          // let arrayOfString =  parsedIntArray.filter(item => typeof item == "string")
          console.log(parsedIntArray);

          if (stringArray.length <= 0 ) return false;

          return true;
      },
      checkYearIsString() {
          let percentagesArray = [this.yearPercentage];
        

          let stringArray =  percentagesArray.filter(item => !isNaN(item))
          let parsedIntArray =  stringArray.filter( (item) => !parseInt(item))
          // let arrayOfString =  parsedIntArray.filter(item => typeof item == "string")
          console.log(parsedIntArray);

          if (stringArray.length <= 0 ) return false;

          return true;
      }

  }
//   methods: {
//     onchange(options) {
//       this.options = options;
//     }
//   }
};
</script>

