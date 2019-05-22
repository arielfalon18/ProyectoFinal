<div class="modal fade bd-example-modal-xl" id="ImportCSV" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Importar CSV </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <h1>@{{PRUEBASAS}}</h1>
      <div class="modal-body">
        <div class="panel panel-sm">
          <div class="panel-body">
            <div class="form-group">
              <label for="csv_file" class="control-label col-sm-3 text-right">CSV fichero</label>
              <div class="col-sm-9">
                <input type="file" id="csv_file" name="csv_file" class="form-control" @change="loadCSV($event)">
              </div>
            </div>
            <div class="col-sm-offset-3 col-sm-9">
            <div class="checkbox-inline">
              <label for="header_rows"><input type="checkbox" id="header_rows"> File contains header row?</label>
            </div>
            </div>
            <div class="col-sm-offset-3 col-sm-9">
              <a href="#" class="btn btn-primary">Parse CSV</a>
            </div>
          <table v-if="parse_csv">
          <thead>
            <tr>
              <th v-for="key in parse_header"
                  @click="sortBy(key)"
                  :class="{ active: sortKey == key }">
                @{{ key | capitalize }}
                <span class="arrow" :class="sortOrders[key] > 0 ? 'asc' : 'dsc'">
                </span>
              </th>
            </tr>
          </thead> 
          <tr v-for="csv in parse_csv">
            <td v-for="key in parse_header">
              @{{csv[key]}}
            </td>
          </tr>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>