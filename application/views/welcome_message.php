<?php include_once('header.php'); ?>
<div class="container">
   <br>
    <h3>View All Posts</h3>
    <?php if($msg = $this->session->flashdata('msg')): ?>
    <?php echo $msg; ?>
    <?php endif;?>
    <?php echo anchor('welcome/create','AddPost',['class'=>'btn btn-primary']) ?>
    <hr>
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Creation Date</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if(count($posts)): ?>
    <?php foreach($posts as $post): ?>
    <tr>
        <td><?php echo $post->title; ?></td>
        <td><?php echo $post->description; ?></td>
        <td><?php echo $post->date_created; ?></td>
        <td><?php echo anchor("welcome/view/{$post->id}",'View',['class'=>'badge badge-primary']) ?>
            <?php echo anchor("welcome/update/{$post->id}",'Update',['class'=>'badge badge-primary']) ?>
            <?php echo anchor("welcome/delete/{$post->id}",'Delete',['class'=>'badge badge-primary']) ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
         <td> No records</td>
         </tr>
    <?php endif; ?>
    </tbody>

</table>
</div>
