<?php
                  echo   '<li class="nav-item active">
                            <a class="btn btn-outline-secondary" href="Controller/codeController.php?req=editor">Editor <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            &nbsp;
                        </li>';
                  if(isset($_SESSION['username']) != "")
                  {
                    echo '<li class="nav-item">
                            <p class="btn btn-outline-secondary"> Welcome '. $_SESSION['username'].'</p>
                          </li>
                          <li class="nav-item">
                            &nbsp;
                          </li>
                          <li class="nav-item">
                            <a class="btn btn-outline-secondary" href="Controller/codeController.php?req=codelist">View Code</a>
                          </li>
                          <li class="nav-item">
                            &nbsp;
                          </li>
                          <li class="nav-item">
                            <a class="btn btn-outline-secondary" href="Controller/codeController.php?req=logout">Logout</a>
                          </li>';
                  }else
                  {
                    echo ' <li class="nav-item">
                              <a class="btn btn-outline-secondary" href="Controller/codeController.php?req=signin">Signin</a>
                            </li>
                            <li class="nav-item">
                                &nbsp;
                            </li>
                            <li class="nav-item">
                              <a class="btn btn-outline-secondary" href="Controller/codeController.php?req=signup">Signup</a>
                            </li>';
                  }
                  ?>