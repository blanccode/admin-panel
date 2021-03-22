<template>
  <span v-if="monthPercentage >= 0 && options == 'last-month'" class="text-success mr-4">
    <i class="fa fa-arrow-up"></i>
    {{monthPercentage}}%
  </span>
  <span v-else-if="options == 'last-month'" class="text-warning mr-4">
    <i class="fa fa-arrow-down"></i>
    {{monthPercentage}}%
  </span>
    <span>{{options}}</span>
  <!-- <span v-if="monthPercentage >= 0 && options == 'last-month'" class="text-success mr-4">
    <i class="fa fa-arrow-up"></i>
    {{monthPercentage}}%
  </span>
  <span v-else-if="options == 'last-month'" class="text-warning mr-4">
    <i class="fa fa-arrow-down"></i>
    {{monthPercentage}}%
  </span>
    <span>{{options}}</span>
  <span v-if="monthPercentage >= 0 && options == 'last-month'" class="text-success mr-4">
    <i class="fa fa-arrow-up"></i>
    {{monthPercentage}}%
  </span>
  <span v-else-if="options == 'last-month'" class="text-warning mr-4">
    <i class="fa fa-arrow-down"></i>
    {{monthPercentage}}%
  </span>
    <span>{{options}}</span> -->
  <!-- <form method="POST">
  @csrf-->
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
  props: ["monthPercentage", 'options' , 'weekPercentage'],
  data() {
    return {
      options: "last-month"
    };
  },
  computed: {

  }
//   methods: {
//     onchange(options) {
//       this.options = options;
//     }
//   }
};
</script>

