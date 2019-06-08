<template>
  <div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th v-for="field in fields" scope="col">{{field}}</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="row in rows">
          <td v-for="item in row">{{item}}</td>
        </tr>
      </tbody>
    </table>
    <div>
      Sorting By: <b>{{ sortBy }}</b>, Sort Direction:
      <b>{{ sortDesc ? 'Descending' : 'Ascending' }}</b>
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      url: {
        type: String
      }
    },
    data() {
      return {
        sortBy: 'id',
        sortDesc: true,
        fields: [],
        rows: []
      }
    },
    created() {
      this.fetchData();
    },
    methods: {
      fetchData() {
        axios.get(this.url).then((response)=>{
          console.log(response);
          this.fields = response.data.fields;
          this.rows = response.data.data.data;
        });
      }
    }
  }
</script>