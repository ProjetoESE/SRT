<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">My Projects</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <?php if($this->session->flashdata('success')):?>
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong><?php echo $this->session->flashdata('success'); ?></strong>
        </div>
    <?php elseif($this->session->flashdata('error')):?>
        <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong><?php echo $this->session->flashdata('error'); ?></strong>
        </div>
    <?php endif;?>
    <div class="row">
        <div class="col-lg-12">      
            
            <!-- INICIO DA CAQUITA -->  
                         
            <table class="table table-striped"> 
                <tbody>
                    <tr> 
                        <th>Project Title</th> 
                        <th>Description</th> 
                        <th>Objectives</th> 
                        <th>Actions</th>
                  </tr>
                        <?php foreach ($project as $pro) { ?>                
                        
                    <tr> 
                        <td><?= $pro -> title; ?></td> 
                        <td><?= $pro -> description; ?></td> 
                        <td><?= $pro -> objectives; ?></td> 
                        <td>

                            <a href="<?=base_url("project/show_project_page/".$pro->project_id)?>" class="btn btn-primary btn-group">Open</a>

                            <!-- Begin Update method --> 
                            <a href="<?=base_url("project/update/".$pro->project_id)?>" class="btn btn-primary btn-group" href="">Update</a>
                             
                            <a href="<?=base_url("project/add_researcher_page/".$pro->project_id)?>" class="btn btn-primary btn-group" href="">Add Researcher</a>
                            <!-- End Update method --> 
                            <!-- Begin Delete method --> 
                            <a href="<?=base_url("project/delete/".$pro->project_id)?>" class="btn btn-danger btn-group" onclick="return confirm('Are you sure you want to delete <?= $pro -> title; ?>?');">Delete</a> </td>
                            <!-- End Delete method --> 

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            
        </div>
                        <!-- FIM DA CAQUITA -->


        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<?php $this->load->view('frame/footer_view')?>