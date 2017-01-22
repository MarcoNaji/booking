 <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                                        <tr>
                                                             <th>Machines\Shifts</th>
                                                            <th class="center"><font color="#0066FF">Shift 1</font></th>
                                                            <th class="center"><font color="#FF0000">Shift 2</font></th>
                                                            <th class="center"><font color="#00CC00">Shift 3</font></th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php for($i=1; $i<=$num_machine; $i++){ ?>
                                                        <tr>
                                                            <td>Machine <?php echo $i; ?></td>
                                                           
                                                          <td class="center">
															<label>
																<input name="s1m<?php echo $i; ?>sat" type="checkbox"<?php foreach($slot as $row): if($row->slot_id == "s1m".$i."sat"){ ?> checked="checked" disabled="disabled"<?php } endforeach; ?> class="ace ace-checkbox-2" value="s1m<?php echo $i; ?>sat" />
																<span class="lbl"></span>
															</label>
														</td>
                                                      <td class="center">
															<label>
																<input name="s2m<?php echo $i; ?>sat" type="checkbox"<?php foreach($slot as $row): if($row->slot_id == "s2m".$i."sat"){ ?> checked="checked" disabled="disabled"<?php } endforeach; ?> class="ace ace-checkbox-2" value="s2m<?php echo $i; ?>sat" />
																<span class="lbl"></span>
															</label>
														</td>
                                                       <td class="center">
															<label>
																<input name="s3m<?php echo $i; ?>sat" type="checkbox"<?php foreach($slot as $row): if($row->slot_id == "s3m".$i."sat"){ ?> checked="checked" disabled="disabled"<?php } endforeach; ?> class="ace ace-checkbox-2" value="s3m<?php echo $i; ?>sat" />
																<span class="lbl"></span>
															</label>
														</td>
                                                            
                                                        </tr>
                                                         <?php }?>

                                                    </tbody>
                                   </table>	