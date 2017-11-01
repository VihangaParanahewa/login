<?php $page='ring'; include 'header.php'; ?>

<h1>Earrings</h1><br>

<?php if ($this->session->flashdata('message')){
    echo "<h3>".$this->session->flashdata('message')."</h3>";
}
?>

<div class=" col-md-9 col-lg-9 ">
    <table class="table table-user-information" align="center">
        <tbody>

        <tr>
            <td>Title</td>
            <td>Category</td>
            <td>Description</td>
            <td>Price</td>
            <td>Image</td>
            <?php if($this->session->userdata('id')==1){ ?>
                <td>Action</td>
            <?php }?>
        </tr>

        <?php foreach ($data as $row){ ?>
                <tr>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['category'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><img  src="<?php echo base_url()."image/"; ?><?php  echo  $row['image'];?>" alt="earringImage" height="150" width="175"></td>

                    <?php if($this->session->userdata('id')==1){ ?>
                        <td>
                            <a href="<?php echo base_url('index.php/Admin/editEarringPost/'.$row['earringId'])?>" class="btn btn-info">Edit</a>
                            <a href="<?php echo base_url('index.php/Admin/deleteEarring/'.$row['earringId'])?>"  onclick="return confirm('Are You Sure ' +
                         'You Want To Delete Student..!');" class="btn btn-danger">Delete</a>
                        </td>
                    <?php }?>

                </tr>
            <?php }
        ?>

        </tbody>
    </table>

    <?php unset(
        $_SESSION['message']
    );?>










<?php include 'footer.php';?>
