<template>

                                                    <span v-for="(columns, a) in column" class="text-success mr-4"><i class="fa fa-arrow-up"></i>
                                                        {{a}}%
                                                    
                                                    </span>
                                                    <li v-for="item in a">
                                                        {{a}}
                                                    </li>
                                                    <span class="text-warning mr-4"><i class="fa fa-arrow-down"></i>
                                                        %
                                                    </span>
                                            
    <!-- <form method="POST">
        @csrf -->
        <div class="custom-flex">
            
            <select name="since" value="" class="form-control pt-0">
                <option value="last-week" class="">Since Last Week</option>
                <option value="last-month" class="">Since Last Month</option>
                <option value="last-year" class="">Since Last Year</option>
            </select>


            <i class="fas fa-chevron-down arrow-down"></i>

        </div>
    <!-- </form> -->
        

</template>


<script>
export default {
   
            props:['column'],

};
</script>

