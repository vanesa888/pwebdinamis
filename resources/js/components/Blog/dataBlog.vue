<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                         <table class="table table-bordered">
                           <tbody> 
                             <tr>
                              <th> Nama </th>
                                <th style="width: 25%">
                                  <center> Aksi </center> </th>
              
                             </tr> 
           
               
                             <tr> 
              
                               <td>isi</td>
                               <td>
                                  <a href>
                                  <i class="fas fa-eye red">Lihat</i></a>
                                   |
                                  <a href>
                                  <i class="fas fa-edit blue">Edit</i></a>
                                   |
                                  <a href>
                                  <i class="fas fa-trash-alt green">Hapus</i></a>
                               </td>                
                             </tr>       
                           </tbody>  
                         </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>


