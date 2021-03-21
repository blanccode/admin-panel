<template>
    <span v-if="monthPercentage >= 0" class="text-success mr-4">
        <i class="fa fa-arrow-up"></i>
        {{monthPercentage}}%
    </span>
    <span v-else class="text-warning mr-4">
        <i class="fa fa-arrow-down"></i>
        {{monthPercentage}}%
    </span>

    <!-- <form method="POST">
    @csrf-->
    <div class="custom-flex">
        <select name="" @change="onchange()" v-model="options" value class="form-control pt-0">
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
  props: ["monthPercentage"],
  data() {
      return {
        options: 'last-month',
      }
  },
  methods: {
    onchange() {
      this.options = options;
    }
  }
};
</script>

