<?php
                                                if (isset($_POST['submit'])) {
                                                  $artid=$_GET['id'];
                                                  $editnic=$_POST['nickname'];
                                                  $editfirst=$_POST['first_name'];
                                                  $editlast=$_POST['last_name'];
                                                  $editage=$_POST['age'];
                                                  $editfone=$_POST['phone'];
                                                  $editaddress=$_POST['address'];
                                                  $editemail=$_POST['email'];
                                                  $query = $rec->editartistinfo($artid,$editnic,$editfirst,$editlast,$editage,$editfone,$editaddress,$editemail);
                                                    if (!$query) {
                                                      echo "<script>
                                                      alert('wapi ntibyakunze');
                                                      </script>";
                                                    }
                                                    else{
                                                      echo "<script>
                                                      window.location.href = 'widgets.php';
                                                      </script>";
                                                    }
                                                  }
                                                
                                                ?>