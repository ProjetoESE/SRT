<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Project: <?= $project[0]->title;?></h1>
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

      <!-- ADD CAQUITA HERE -->
      <h3>Protocol</h3>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#">Overal Information</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Research Questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Data Bases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Search Strings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Search Strategy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Criteria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quality Assessment</a>
        </li>
      </ul>
      <!-- END OF CAQUITA -->

    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
</div>
<?php $this->load->view('frame/footer_view')?>