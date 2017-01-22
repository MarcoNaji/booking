
<div class="main-content">

<!-- basic styles -->

		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
	
<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.full.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.css" />
        <!-- fonts -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-skins.min.css" />
        <!-- ace settings handler -->

		<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" />

        <script type="text/javascript">
							<!-- check if patient exists jquery -->
							
							$(document).ready(function() {
    $("#ic").keyup(function() {
        //remove all the class add the messagebox classes and start fading
		document.getElementById("msgbox").style.color="#000000";
		var ic    = $(this).val();
		if(ic != ""){
        $("#msgbox").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");

        //check the username exists or not from ajax

        
        $.ajax({
            url     : "<?php echo base_url(); ?>index.php/staff/check_patient_availability",
            data    : { pat_ic : ic },
            type    : 'POST',
            success : function(data){
                if( data == "0" ){
                    $("#msgbox").fadeTo(200,0.1,function() {  //start fading the messagebox

                        //add message and change the class of the box and start fading
                        $(this).html('&#10006'+'  This Patient Exists in System Database.').addClass('messageboxerror').fadeTo(900,1);
						this.style.color= '#FF0033';
                    });
                }else if( data == "1" ){
                    $("#msgbox").fadeTo(200,0.1,function() {  //start fading the messagebox

                        //add message and change the class of the box and start fading
                        $(this).html('&#10004').addClass('messageboxok').fadeTo(900,1); 
						this.style.color= '#00CC66';   
                    });
                }
            }
        });
		}else{
			$("#msgbox").removeClass().addClass('messagebox').text('').fadeIn("slow");
		}
    });
}); 
							
							
							<!-- medical problem jquery -->
							
							$(function() {
  enable_cb();
  $("#problem1").click(enable_cb);
});

function enable_cb() {
  if (this.checked) {
    $("input#group1").removeAttr("disabled");
	 $("textarea#group1").removeAttr("disabled");
	$("input#group1_1").removeAttr("disabled");
  } else {
    $("input#group1").attr("disabled", true);
	$("textarea#group1").attr("disabled", true);
	 $("input#group1_1").attr("disabled", true);
  }
}

$(function() {
  enable_rb1();
  $("#group1_1").click(enable_rb1);
});
function enable_rb1() {
  if (this.checked) {
    $("input#group1rb").removeAttr("disabled");
  } else {
    $("input#group1rb").attr("disabled", true);
  }
}

$(function() {
  enable_cb2();
  $("#problem2").click(enable_cb2);
});

function enable_cb2() {
  if (this.checked) {
    $("input#group2").removeAttr("disabled");
	 $("textarea#group2").removeAttr("disabled");
  } else {
    $("input#group2").attr("disabled", true);
	$("textarea#group2").attr("disabled", true);
  }
}

$(function() {
  enable_cb3();
  $("#problem3").click(enable_cb3);
});

function enable_cb3() {
  if (this.checked) {
    $("input#group3").removeAttr("disabled");
	 $("textarea#group3").removeAttr("disabled");
  } else {
    $("input#group3").attr("disabled", true);
	$("textarea#group3").attr("disabled", true);
  }
}

$(function() {
  enable_cb4();
  $("#problem4").click(enable_cb4);
});

function enable_cb4() {
  if (this.checked) {
    $("input#group4").removeAttr("disabled");
	 $("textarea#group4").removeAttr("disabled");
	$("input#group4_1").removeAttr("disabled");
  } else {
    $("input#group4").attr("disabled", true);
	$("textarea#group4").attr("disabled", true);
	 $("input#group4_1").attr("disabled", true);
  }
}	
$(function() {
  enable_date1();
  $("#group4_1").click(enable_date1);
});
function enable_date1() {
  if (this.checked) {
    $("input#id-date-picker-1").removeAttr("disabled");
	$("input#id-date-picker-2").removeAttr("disabled");
  } else {
    $("input#id-date-picker-1").attr("disabled", true);
	$("input#id-date-picker-2").attr("disabled", true);
  }
}

$(function() {
  enable_cb5();
  $("#problem5").click(enable_cb5);
});

function enable_cb5() {
  if (this.checked) {
    $("input#group5").removeAttr("disabled");
	 $("textarea#group5").removeAttr("disabled");
  } else {
    $("input#group5").attr("disabled", true);
	$("textarea#group5").attr("disabled", true);
  }
}

	$(function() {
  enable_cb6();
  $("#problem6").click(enable_cb6);
});

function enable_cb6() {
  if (this.checked) {
    $("input#group6").removeAttr("disabled");
	 $("textarea#group6").removeAttr("disabled");
	$("input#group6_1").removeAttr("disabled");
  } else {
    $("input#group6").attr("disabled", true);
	$("textarea#group6").attr("disabled", true);
	 $("input#group6_1").attr("disabled", true);
  }
}

$(function() {
  enable_rb6();
  $("#group6_1").click(enable_rb6);
});
function enable_rb6() {
  if (this.checked) {
    $("input#group6rb").removeAttr("disabled");
  } else {
    $("input#group6rb").attr("disabled", true);
  }
}

$(function() {
  enable_cb7();
  $("#problem7").click(enable_cb7);
});

function enable_cb7() {
  if (this.checked) {
    $("input#group7").removeAttr("disabled");
	 $("textarea#group7").removeAttr("disabled");
  } else {
    $("input#group7").attr("disabled", true);
	$("textarea#group7").attr("disabled", true);
  }
}

$(function() {
  enable_cb8();
  $("#problem8").click(enable_cb8);
});
function enable_cb8() {
  if (this.checked) {
    $("input#group8").removeAttr("disabled");
	 $("textarea#group8").removeAttr("disabled");
	$("input#group8_1").removeAttr("disabled");
  } else {
    $("input#group8").attr("disabled", true);
	$("textarea#group8").attr("disabled", true);
	 $("input#group8_1").attr("disabled", true);
  }
}

$(function() {
  enable_rb8();
  $("#group8_1").click(enable_rb8);
});
function enable_rb8() {
  if (this.checked) {
    $("input#group8rb").removeAttr("disabled");
  } else {
    $("input#group8rb").attr("disabled", true);
  }
}

$(function() {
  enable_cb9();
  $("#problem9").click(enable_cb9);
});

function enable_cb9() {
  if (this.checked) {
	 $("textarea#group9").removeAttr("disabled");
  } else {
	$("textarea#group9").attr("disabled", true);
  }
}

$(function() {
  enable_cb10();
  $("#summary1").click(enable_cb10);
});

function enable_cb10() {
  if (this.checked) {
	 $("textarea#group10").removeAttr("disabled");
  } else {
	$("textarea#group10").attr("disabled", true);
  }
}

<!-- medication jquery -->

$(function() {
  enable_cb_med1();
  $("#med1").click(enable_cb_med1);
});

function enable_cb_med1() {
  if (this.checked) {
     $("input#med_group1_1").removeAttr("disabled");
	 $("input#med_group1_2").removeAttr("disabled");
	 $("input#med_group1_3").removeAttr("disabled");
	 $("input#med_group1_4").removeAttr("disabled");
	 $("input#med_group1_5").removeAttr("disabled");
	 $("input#med_group1_6").removeAttr("disabled");
     $("input#med_group1_7").removeAttr("disabled");
	 $("textarea#med_group1_8").removeAttr("disabled");
	
  } else {
    $("input#med_group1_1").attr("disabled", true);
	$("input#med_group1_2").attr("disabled", true);
	$("input#med_group1_3").attr("disabled", true);
	$("input#med_group1_4").attr("disabled", true);
	$("input#med_group1_5").attr("disabled", true);
	$("input#med_group1_6").attr("disabled", true);
	$("input#med_group1_7").attr("disabled", true);
	$("textarea#med_group1_8").attr("disabled", true);
	
  }
}
$(function() {
  enable_med_group1_1rb();
  $("#med_group1_1").click(enable_med_group1_1rb);
});
function enable_med_group1_1rb() {
  if (this.checked) {
    $("input#med_group1_1rb").removeAttr("disabled");
  } else {
    $("input#med_group1_1rb").attr("disabled", true);
  }
}
$(function() {
  enable_med_group1_2rb();
  $("#med_group1_2").click(enable_med_group1_2rb);
});
function enable_med_group1_2rb() {
  if (this.checked) {
    $("input#med_group1_2rb").removeAttr("disabled");
  } else {
    $("input#med_group1_2rb").attr("disabled", true);
  }
}
$(function() {
  enable_med_group1_3rb();
  $("#med_group1_3").click(enable_med_group1_3rb);
});
function enable_med_group1_3rb() {
  if (this.checked) {
    $("input#med_group1_3rb").removeAttr("disabled");
  } else {
    $("input#med_group1_3rb").attr("disabled", true);
  }
}
$(function() {
  enable_med_group1_4rb();
  $("#med_group1_4").click(enable_med_group1_4rb);
});
function enable_med_group1_4rb() {
  if (this.checked) {
    $("input#med_group1_4rb").removeAttr("disabled");
  } else {
    $("input#med_group1_4rb").attr("disabled", true);
  }
}
$(function() {
  enable_med_group1_5rb();
  $("#med_group1_5").click(enable_med_group1_5rb);
});
function enable_med_group1_5rb() {
  if (this.checked) {
    $("input#med_group1_5rb").removeAttr("disabled");
  } else {
    $("input#med_group1_5rb").attr("disabled", true);
  }
}
$(function() {
  enable_med_group1_6rb();
  $("#med_group1_6").click(enable_med_group1_6rb);
});
function enable_med_group1_6rb() {
  if (this.checked) {
    $("input#med_group1_6rb").removeAttr("disabled");
  } else {
    $("input#med_group1_6rb").attr("disabled", true);
  }
}
$(function() {
  enable_med_group1_7rb();
  $("#med_group1_7").click(enable_med_group1_7rb);
});
function enable_med_group1_7rb() {
  if (this.checked) {
    $("input#med_group1_7rb").removeAttr("disabled");
  } else {
    $("input#med_group1_7rb").attr("disabled", true);
  }
}

$(function() {
  enable_cb_med2();
  $("#med2").click(enable_cb_med2);
});

function enable_cb_med2() {
  if (this.checked) {
     $("input#med_group2_1").removeAttr("disabled");
	 $("input#med_group2_2").removeAttr("disabled");
	 $("input#med_group2_3").removeAttr("disabled");
	 $("input#med_group2_4").removeAttr("disabled");
	 $("textarea#med_group2_5").removeAttr("disabled");
	
  } else {
    $("input#med_group2_1").attr("disabled", true);
	$("input#med_group2_2").attr("disabled", true);
	$("input#med_group2_3").attr("disabled", true);
	$("input#med_group2_4").attr("disabled", true);
	$("textarea#med_group2_5").attr("disabled", true);
	
  }
}
$(function() {
  enable_med_group2_1rb();
  $("#med_group2_1").click(enable_med_group2_1rb);
});
function enable_med_group2_1rb() {
  if (this.checked) {
    $("input#med_group2_1rb").removeAttr("disabled");
  } else {
    $("input#med_group2_1rb").attr("disabled", true);
  }
}
$(function() {
  enable_med_group2_2rb();
  $("#med_group2_2").click(enable_med_group2_2rb);
});
function enable_med_group2_2rb() {
  if (this.checked) {
    $("input#med_group2_2rb").removeAttr("disabled");
  } else {
    $("input#med_group2_2rb").attr("disabled", true);
  }
}
$(function() {
  enable_med_group2_3rb();
  $("#med_group2_3").click(enable_med_group2_3rb);
});
function enable_med_group2_3rb() {
  if (this.checked) {
    $("input#med_group2_3rb").removeAttr("disabled");
  } else {
    $("input#med_group2_3rb").attr("disabled", true);
  }
}
$(function() {
  enable_med_group2_4rb();
  $("#med_group2_4").click(enable_med_group2_4rb);
});
function enable_med_group2_4rb() {
  if (this.checked) {
    $("input#med_group2_4rb").removeAttr("disabled");
  } else {
    $("input#med_group2_4rb").attr("disabled", true);
  }
}

$(function() {
  enable_cb_med3();
  $("#med3").click(enable_cb_med3);
});

function enable_cb_med3() {
  if (this.checked) {
     $("input#med_group3_1").removeAttr("disabled");
	 $("input#med_group3_2").removeAttr("disabled");
	 $("textarea#med_group3_3").removeAttr("disabled");
	
  } else {
    $("input#med_group3_1").attr("disabled", true);
	$("input#med_group3_2").attr("disabled", true);
	$("textarea#med_group3_3").attr("disabled", true);
	
  }
}
$(function() {
  enable_med_group3_1rb();
  $("#med_group3_1").click(enable_med_group3_1rb);
});
function enable_med_group3_1rb() {
  if (this.checked) {
    $("input#med_group3_1rb").removeAttr("disabled");
  } else {
    $("input#med_group3_1rb").attr("disabled", true);
  }
}
$(function() {
  enable_med_group3_2rb();
  $("#med_group3_2").click(enable_med_group3_2rb);
});
function enable_med_group3_2rb() {
  if (this.checked) {
    $("input#med_group3_2rb").removeAttr("disabled");
  } else {
    $("input#med_group3_2rb").attr("disabled", true);
  }
}

$(function() {
  enable_cb_med4();
  $("#med4").click(enable_cb_med4);
});

function enable_cb_med4() {
  if (this.checked) {
     $("input#med_group4_1").removeAttr("disabled");
	 $("input#med_group4_2").removeAttr("disabled");
	 $("textarea#med_group4_3").removeAttr("disabled");
	
  } else {
    $("input#med_group4_1").attr("disabled", true);
	$("input#med_group4_2").attr("disabled", true);
	$("textarea#med_group4_3").attr("disabled", true);
	
  }
}
$(function() {
  enable_med_group4_1rb();
  $("#med_group4_1").click(enable_med_group4_1rb);
});
function enable_med_group4_1rb() {
  if (this.checked) {
    $("input#med_group4_1rb").removeAttr("disabled");
  } else {
    $("input#med_group4_1rb").attr("disabled", true);
  }
}
$(function() {
  enable_med_group4_2rb();
  $("#med_group4_2").click(enable_med_group4_2rb);
});
function enable_med_group4_2rb() {
  if (this.checked) {
    $("input#med_group4_2rb").removeAttr("disabled");
  } else {
    $("input#med_group4_2rb").attr("disabled", true);
  }
}

$(function() {
  enable_cb_med5();
  $("#med5").click(enable_cb_med5);
});

function enable_cb_med5() {
  if (this.checked) {
     $("input#med_group5_1").removeAttr("disabled");
	 $("input#med_group5_2").removeAttr("disabled");
	 $("textarea#med_group5_3").removeAttr("disabled");
	
  } else {
    $("input#med_group5_1").attr("disabled", true);
	$("input#med_group5_2").attr("disabled", true);
	$("textarea#med_group5_3").attr("disabled", true);
	
  }
}
$(function() {
  enable_med_group5_1rb();
  $("#med_group5_1").click(enable_med_group5_1rb);
});
function enable_med_group5_1rb() {
  if (this.checked) {
    $("input#med_group5_1rb").removeAttr("disabled");
  } else {
    $("input#med_group5_1rb").attr("disabled", true);
  }
}
$(function() {
  enable_med_group5_2rb();
  $("#med_group5_2").click(enable_med_group5_2rb);
});
function enable_med_group5_2rb() {
  if (this.checked) {
    $("input#med_group5_2rb").removeAttr("disabled");
  } else {
    $("input#med_group5_2rb").attr("disabled", true);
  }
}

$(function() {
  enable_cb_med6();
  $("#med6").click(enable_cb_med6);
});

function enable_cb_med6() {
  if (this.checked) {
     $("input#med_group6_1").removeAttr("disabled");
	 $("input#med_group6_2").removeAttr("disabled");
	 $("input#med_group6_3").removeAttr("disabled");
	 $("textarea#med_group6_4").removeAttr("disabled");
	
  } else {
    $("input#med_group6_1").attr("disabled", true);
	$("input#med_group6_2").attr("disabled", true);
	$("input#med_group6_3").attr("disabled", true);
	$("textarea#med_group6_4").attr("disabled", true);
	
  }
}
$(function() {
  enable_med_group6_1rb();
  $("#med_group6_1").click(enable_med_group6_1rb);
});
function enable_med_group6_1rb() {
  if (this.checked) {
    $("input#med_group6_1rb").removeAttr("disabled");
  } else {
    $("input#med_group6_1rb").attr("disabled", true);
  }
}
$(function() {
  enable_med_group6_2rb();
  $("#med_group6_2").click(enable_med_group6_2rb);
});
function enable_med_group6_2rb() {
  if (this.checked) {
    $("input#med_group6_2rb").removeAttr("disabled");
  } else {
    $("input#med_group6_2rb").attr("disabled", true);
  }
}
$(function() {
  enable_med_group6_3rb();
  $("#med_group6_3").click(enable_med_group6_3rb);
});
function enable_med_group6_3rb() {
  if (this.checked) {
    $("input#med_group6_3rb").removeAttr("disabled");
  } else {
    $("input#med_group6_3rb").attr("disabled", true);
  }
}

$(function() {
  enable_cb_med7();
  $("#med7").click(enable_cb_med7);
});

function enable_cb_med7() {
  if (this.checked) {
     $("input#med_group7_1").removeAttr("disabled");
	 $("textarea#med_group7_2").removeAttr("disabled");
	
  } else {
    $("input#med_group7_1").attr("disabled", true);
	$("textarea#med_group7_2").attr("disabled", true);
	
  }
}
$(function() {
  enable_med_group7_1rb();
  $("#med_group7_1").click(enable_med_group7_1rb);
});
function enable_med_group7_1rb() {
  if (this.checked) {
    $("input#med_group7_1rb").removeAttr("disabled");
  } else {
    $("input#med_group7_1rb").attr("disabled", true);
  }
}

$(function() {
  enable_cb_med8();
  $("#med8").click(enable_cb_med8);
});

function enable_cb_med8() {
  if (this.checked) {
     $("input#med_group8_1").removeAttr("disabled");
	 $("input#med_group8_2").removeAttr("disabled");
	 $("textarea#med_group8_3").removeAttr("disabled");
	
  } else {
    $("input#med_group8_1").attr("disabled", true);
	$("input#med_group8_2").attr("disabled", true);
	$("textarea#med_group8_3").attr("disabled", true);
	
  }
}
$(function() {
  enable_med_group8_1rb();
  $("#med_group8_1").click(enable_med_group8_1rb);
});
function enable_med_group8_1rb() {
  if (this.checked) {
    $("input#med_group8_1rb").removeAttr("disabled");
  } else {
    $("input#med_group8_1rb").attr("disabled", true);
  }
}
$(function() {
  enable_med_group8_2rb();
  $("#med_group8_2").click(enable_med_group8_2rb);
});
function enable_med_group8_2rb() {
  if (this.checked) {
    $("input#med_group8_2rb").removeAttr("disabled");
  } else {
    $("input#med_group8_2rb").attr("disabled", true);
  }
}

$(function() {
  enable_cb_med9();
  $("#med9").click(enable_cb_med9);
});

function enable_cb_med9() {
  if (this.checked) {
     $("input#med_group9_1").removeAttr("disabled");
	 $("textarea#med_group9_2").removeAttr("disabled");
	
  } else {
    $("input#med_group9_1").attr("disabled", true);
	$("textarea#med_group9_2").attr("disabled", true);
	
  }
}
$(function() {
  enable_med_group9_1rb();
  $("#med_group9_1").click(enable_med_group9_1rb);
});
function enable_med_group9_1rb() {
  if (this.checked) {
    $("input#med_group9_1rb").removeAttr("disabled");
  } else {
    $("input#med_group9_1rb").attr("disabled", true);
  }
}

$(function() {
  enable_cb_med10();
  $("#med10").click(enable_cb_med10);
});

function enable_cb_med10() {
  if (this.checked) {
     $("input#med_group10_1").removeAttr("disabled");
	 $("textarea#med_group10_2").removeAttr("disabled");
	
  } else {
    $("input#med_group10_1").attr("disabled", true);
	$("textarea#med_group10_2").attr("disabled", true);
	
  }
}
$(function() {
  enable_med_group10_1rb();
  $("#med_group10_1").click(enable_med_group10_1rb);
});
function enable_med_group10_1rb() {
  if (this.checked) {
    $("input#med_group10_1rb").removeAttr("disabled");
  } else {
    $("input#med_group10_1rb").attr("disabled", true);
  }
}

$(function() {
  enable_cb_med11();
  $("#med11").click(enable_cb_med11);
});

function enable_cb_med11() {
  if (this.checked) {
	 $("input#med_group11_1").removeAttr("disabled");
	 $("textarea#med_group11_1").removeAttr("disabled");
	
  } else {
	$("input#med_group11_1").attr("disabled", true);
	$("textarea#med_group11_1").attr("disabled", true);
	
  }
}

$(function() {
  enable_cb_med12();
  $("#med12").click(enable_cb_med12);
});

function enable_cb_med12() {
  if (this.checked) {
	 $("textarea#med_group12_1").removeAttr("disabled");
	
  } else {
	$("textarea#med_group12_1").attr("disabled", true);
	
  }
}

$(function() {
  enable_cb_med13();
  $("#plan").click(enable_cb_med13);
});

function enable_cb_med13() {
  if (this.checked) {
	 $("textarea#med_group13_1").removeAttr("disabled");
	
  } else {
	$("textarea#med_group13_1").attr("disabled", true);
	
  }
}




			</script>
        
					
						
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="<?php echo base_url(); ?>index.php/staff">Home</a>
							</li>
                            <li>
								<a href="<?php echo base_url(); ?>index.php/staff/pat_list">Manage Patient</a>
							</li>
                            <li class="active">Add Patient</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>Add New Patient
							</h1>
                            
						</div><!-- /.page-header -->
						<div class="row">
							<div class="col-xs-12">
								
								<div class="row-fluid">

									<div class="span12">
										<div class="widget-box">
											<div class="widget-header widget-header-blue widget-header-flat">
												<h4 class="lighter">Please Complete the Four Steps</h4>

												
											</div>
											<div class="widget-body">
												<div class="widget-main">

                                                
													<div id="fuelux-wizard" class="row-fluid" data-target="#step-container">
														<ul class="wizard-steps">
															<li data-target="#step1" class="active">
																<span class="step">1</span>
																<span class="title">Patient Info</span>
															</li>

															<li data-target="#step2">
																<span class="step">2</span>
																<span class="title">Medical Info</span>
															</li>

															<li data-target="#step3">
																<span class="step">3</span>
																<span class="title">Medical Problems</span>
															</li>

															<li data-target="#step4">
																<span class="step">4</span>
																<span class="title">Medication</span>
															</li>
														</ul>
													</div>

													<hr />
                                                     <form class="form-horizontal" id="validation-form" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>index.php/staff/add_pat">
													<div class="step-content row-fluid position-relative" id="step-container">
                                                   
														<div class="step-pane active" id="step1">
															<h3 class="lighter block green">Patient</h3>

<div class="form-group">
<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name"> Profile Picture:</label>
														
<div class="col-xs-12 col-sm-9">
																		<div class="col-sm-3">
											
												<input multiple="" type="file" name="profile_pic" id="id-input-file-profile"/>
											
											
											<div class="space-4"></div>
											
										</div>
                                        </div>
                                        </div>
															
                                                            <div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name"> Name:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="text" id="name" name="name" class="col-xs-12 col-sm-5" />
																		</div>
																	</div>
																</div>
                                                                  <div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">IC:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="text" id="ic" name="ic"/>&nbsp;&nbsp;<span id="msgbox" style="display:none"></span>
																		</div>
																	</div>
																</div>
                                                                 <div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Age:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="text" id="age" name="ages" class="col-xs-12 col-sm-2" />
																		</div>
																	</div>
																</div>
                                                                <div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right">Gender</label>

																	<div class="col-xs-12 col-sm-9">
																		<div>
																			<label class="blue">
																				<input name="gender" value="Male" type="radio" class="ace" />
																				<span class="lbl"> Male</span>
																			</label>
																		</div>

																		<div>
																			<label class="blue">
																				<input name="gender" value="Female" type="radio" class="ace" />
																				<span class="lbl"> Female</span>
																			</label>
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email Address:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="email" name="emails" id="email" class="col-xs-12 col-sm-6" />
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

															<div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Phone Number:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="input-group">
																			<span class="input-group-addon">
																				<i class=""></i>
																			</span>

																			<input type="tel" id="phone" name="phones" />
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="nkmobile">Mobile Number:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="input-group">
																			<span class="input-group-addon">
																				<i class=""></i>
																			</span>

																			<input type="tel" id="mobile" name="mobiles" />
																		</div>
																	</div>
																</div>
                                                                <div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="address">Address</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<textarea class="input-xlarge" name="addresss" id="address"></textarea>
																		</div>
																	</div>
																</div>

																<div class="hr hr-dotted"></div>
                                                                <h3 class="lighter block green">Next-of-Kin</h3>

																  <div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="nkname"> Name:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="text" id="nkname" name="nknames" class="col-xs-12 col-sm-5" />
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																  <div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="nkjob">Occupation:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="text" id="nkjob" name="nkjobs" class="col-xs-12 col-sm-4" />
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																	<div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="relation">Relation to Patient</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="text" class="col-xs-12 col-sm-4" id="relation" name="relations"/>
																		</div>
																	</div>
																</div>

																

																<div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="nkemail">Email Address:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="email" name="nkemails" id="nkemail" class="col-xs-12 col-sm-6" />
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

															<div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="nkphone">Phone Number:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="input-group">
																			<span class="input-group-addon">
																				<i class=""></i>
																			</span>

																			<input type="tel" id="nkphone" name="nkphones" />&nbsp;&nbsp;
                                                                            
												<span class="middle">* Leave empty if it is the same as Patient's phone </span>
											
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="nkmobile">Mobile Number:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="input-group">
																			<span class="input-group-addon">
																				<i class=""></i>
																			</span>

																			<input type="tel" id="nkmobile" name="nkmobiles" />
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																 <div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="nkaddress">Address</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<textarea class="input-xlarge" name="nkaddresss" id="nkaddress"></textarea>
                                                                            &nbsp;&nbsp;
                                                                            <span class="middle">* Leave empty if it is the same as Patient's address </span>
																		</div>
																	</div>
																</div>

																<div class="space-8"></div>

																
															
														</div>

														<div class="step-pane" id="step2">
                                                        <div class="space-8"></div>
                                                        <div class="row">
										
										<div class="form-group col-sm-5">
											<label class="col-sm-4 control-label" style="text-align: left;">Refer From</label>
											<div class="col-sm-7">
												<input name="refer_from" class="form-control" id="form-field-select-1" />
											</div>
										</div>

										<div class="form-group col-sm-5">
											<label class="col-sm-4 control-label" style="text-align: left;">Reference Date</label>
											<div class="col-sm-7">
											<div class="input-group">
																		<input name="refer_date" class="form-control date-picker" id="id-date-picker-3" type="text" data-date-format="dd-mm-yyyy">
																		<span class="input-group-addon">
																			<i class="icon-calendar bigger-110"></i>
																		</span>
																	</div>
											</div>
										</div>
									
								</div>
                                
                                <div class="row">
										
										<div class="form-group col-sm-5">
											<label class="col-sm-4 control-label" style="text-align: left;">Reference Letter</label>
											<div class="col-sm-7">
												<input name="refer_letter" type="file" id="id-input-file-2" />
											</div>
										</div>
									
								</div>
                                <div class="hr hr-dotted"></div>
                                
                                <div class="space-8"></div>
                                                        <div class="row">
                                                        <div class="space-8"></div>
										
										<div class="form-group col-sm-5">
											<label class="col-sm-4 control-label" style="text-align: left;">Diagnosis Result</label>
											<div class="col-sm-7">
													<select name="diag_result" class="form-control" id="form-field-select-1">
                                                     <option value="infection">Infection</option>
											   <option value="no infection">No Infection</option>
                                               
                                                
                                               
											</select>
											</div>
										</div>
										
										<div class="form-group col-sm-5">
											<label class="col-sm-4 control-label" style="text-align: left;">Diagnosis Letter</label>
											<div class="col-sm-7">
												<input name="diag_letter" type="file" id="id-input-file-2" />
											</div>
										</div>
									
								</div>
                                <div class="hr hr-dotted"></div>
                                
                                  <div class="space-8"></div>
                                                        <div class="row">
                                                        <div class="space-8"></div>
										
										<div class="form-group col-sm-5">
											<label class="col-sm-4 control-label" style="text-align: left;">Sponsorship</label>
											<div class="col-sm-7">
													<select name="sponsor" class="form-control" id="form-field-select-1">
												 <option>Not Sponsored</option>
                                                <option>Self Sponsored</option>
                                                <option>Government Centers</option>
                                                <option>Government Subsidy</option>
                                                <option>JPA Reimbursed</option>
                                                <option>SOCSO Reimbursed</option>
                                                <option>Baitulmal</option>
                                                <option>ATM</option>
                                                <option>SUK</option>
                                                <option>Angkasa</option>
                                               
                                               
											</select>
											</div>
										</div>
									
								</div>
                                <div class="hr hr-dotted"></div>
                                                        
                                                        
                                                          <h3 class="lighter block green">Specialists in Charge</h3>
                                                        <div class="row">
										
										<div class="form-group col-sm-5">
											<label class="col-sm-4 control-label" style="text-align: left;">Nephrologist</label>
											<div class="col-sm-7">
												<select name="neph_incharge" class="form-control" id="form-field-select-1">
												<option value="">&nbsp;</option>
                                                <?php 
												foreach($neph_superviser as $row):
												foreach($neph as $nrow): if($row->neph_id == $nrow->neph_id){?>
												<option value="<?php echo $nrow->neph_id; ?>"><?php echo $nrow->name; ?></option><?php }endforeach; endforeach; ?>
											</select>
											</div>
										</div>

										<div class="form-group col-sm-5">
											<label class="col-sm-4 control-label" style="text-align: left;">Doctor</label>
											<div class="col-sm-7">
												<select name="doc_incharge" class="form-control" id="form-field-select-1">
												<option value="">&nbsp;</option>
                                                  <?php 
												foreach($doc_superviser as $row):
												foreach($doc as $drow): if($row->doc_id == $drow->doc_id){?>												<option value="<?php echo $drow->doc_id; ?>"><?php echo $drow->name; ?></option><?php }endforeach; endforeach; ?>
											</select>
											</div>
										</div>
									
								</div>
                                <div class="hr hr-dotted"></div>
                              
								<div class="space-8"></div>
                                
                                
                                                        <h3 class="lighter block green">Slot Schedule</h3>
															<div id="tabs">
                                                            <li class="text-warning bigger-110 orange">
																	<i class="icon-warning-sign"></i>
																	Patients with Infection or Not Sponsored are Automatically Placed in Waiting List
																</li>
									<ul>
										<li>
											<a href="#tabs-1">Sunday</a>
										</li>

										<li>
											<a href="#tabs-2">Monday</a>
										</li>

										<li>
											<a href="#tabs-3">Tuesday</a>
										</li>

										<li>
											<a href="#tabs-4">Wednesday</a>
										</li>

										<li>
											<a href="#tabs-5">Thursday</a>
										</li>

										<li>
											<a href="#tabs-6">Friday</a>
										</li>

										<li>
											<a href="#tabs-7">Saturday</a>
										</li>
									</ul>

									<div id="tabs-1">
                                    <div class="table-responsive">
                                   <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                                        <tr>
                                                            <th>Slot\Shift</th>
                                                            <?php $j=1; foreach($shift as $srow):?>
                                                            <th class="center"><font color="#0066FF">Shift <?php echo $j;?><br><?php echo "( ".$srow->from." - ".$srow->to." )"?></font></th>
                                                            <?php $j++; endforeach; ?>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $i=1; foreach($machine as $mrow): ?>
                                                        <tr>
                                                            <td>Slot <?php echo $i; ?></td>
                                                           <?php $j=1; foreach($shift as $srow):?>
                                                          <td class="center">
															<label>
																<input name="s<?php echo $j; ?>s<?php echo $i; ?>sun" type="checkbox"<?php foreach($slot as $row): if($row->slot_id == $srow->shift_id."s".$i."sun"){ ?> checked="checked" disabled="disabled"<?php foreach($pat as $prow): if($row->pat_id == $prow->pat_id){?> title="(Name: <?php echo $prow->name; ?>) (IC: <?php echo $prow->pat_ic; ?>)" <?php }endforeach; } endforeach; ?> class="ace ace-checkbox-2" value="<?php echo $srow->shift_id; ?>s<?php echo $i; ?>sun" />
																<span class="lbl"></span>
															</label>
														</td>
														<?php $j++; endforeach; ?>
                                                             
                                                        </tr>
                                                        <?php $i++; endforeach; ?>

                                                    </tbody>
                                   </table>
                                   </div>
									</div><!-- /.tabs1 -->

									<div id="tabs-2">
										   <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                                        <tr>
                                                            <th>Slot\Shift</th>
                                                            <?php $j=1; foreach($shift as $srow):?>
                                                            <th class="center"><font color="#0066FF">Shift <?php echo $j;?><br><?php echo "( ".$srow->from." - ".$srow->to." )"?></font></th>
                                                            <?php $j++; endforeach; ?>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $i=1; foreach($machine as $mrow): ?>
                                                        <tr>
                                                            <td>Slot <?php echo $i; ?></td>
                                                           <?php $j=1; foreach($shift as $srow):?>
                                                          <td class="center">
															<label>
																<input name="s<?php echo $j; ?>s<?php echo $i; ?>mon" type="checkbox"<?php foreach($slot as $row): if($row->slot_id == $srow->shift_id."s".$i."mon"){ ?> checked="checked" disabled="disabled"<?php foreach($pat as $prow): if($row->pat_id == $prow->pat_id){?> title="(Name: <?php echo $prow->name; ?>) (IC: <?php echo $prow->pat_ic; ?>)" <?php }endforeach; } endforeach; ?> class="ace ace-checkbox-2" value="<?php echo $srow->shift_id; ?>s<?php echo $i; ?>mon" />
																<span class="lbl"></span>
															</label>
														</td>
														<?php $j++; endforeach; ?>
                                                             
                                                        </tr>
                                                        <?php $i++; endforeach; ?>

                                                    </tbody>
                                   </table>
									</div>

									<div id="tabs-3">
										 <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                                       <tr>
                                                            <th>Slot\Shift</th>
                                                            <?php $j=1; foreach($shift as $srow):?>
                                                            <th class="center"><font color="#0066FF">Shift <?php echo $j;?><br><?php echo "( ".$srow->from." - ".$srow->to." )"?></font></th>
                                                            <?php $j++; endforeach; ?>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $i=1; foreach($machine as $mrow): ?>
                                                        <tr>
                                                            <td>Slot <?php echo $i; ?></td>
                                                           <?php $j=1; foreach($shift as $srow):?>
                                                          <td class="center">
															<label>
																<input name="s<?php echo $j; ?>s<?php echo $i; ?>tue" type="checkbox"<?php foreach($slot as $row): if($row->slot_id == $srow->shift_id."s".$i."tue"){ ?> checked="checked" disabled="disabled"<?php foreach($pat as $prow): if($row->pat_id == $prow->pat_id){?> title="(Name: <?php echo $prow->name; ?>) (IC: <?php echo $prow->pat_ic; ?>)" <?php }endforeach; } endforeach; ?> class="ace ace-checkbox-2" value="<?php echo $srow->shift_id; ?>s<?php echo $i; ?>tue" />
																<span class="lbl"></span>
															</label>
														</td>
														<?php $j++; endforeach; ?>
                                                             
                                                        </tr>
                                                        <?php $i++; endforeach; ?>

                                                    </tbody>
                                   </table>	
									</div>

									<div id="tabs-4">
										  <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                                        <tr>
                                                            <th>Slot\Shift</th>
                                                            <?php $j=1; foreach($shift as $srow):?>
                                                            <th class="center"><font color="#0066FF">Shift <?php echo $j;?><br><?php echo "( ".$srow->from." - ".$srow->to." )"?></font></th>
                                                            <?php $j++; endforeach; ?>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $i=1; foreach($machine as $mrow): ?>
                                                        <tr>
                                                            <td>Slot <?php echo $i; ?></td>
                                                           <?php $j=1; foreach($shift as $srow):?>
                                                          <td class="center">
															<label>
																<input name="s<?php echo $j; ?>s<?php echo $i; ?>wed" type="checkbox"<?php foreach($slot as $row): if($row->slot_id == $srow->shift_id."s".$i."wed"){ ?> checked="checked" disabled="disabled"<?php foreach($pat as $prow): if($row->pat_id == $prow->pat_id){?> title="(Name: <?php echo $prow->name; ?>) (IC: <?php echo $prow->pat_ic; ?>)" <?php }endforeach; } endforeach; ?> class="ace ace-checkbox-2" value="<?php echo $srow->shift_id; ?>s<?php echo $i; ?>wed" />
																<span class="lbl"></span>
															</label>
														</td>
														<?php $j++; endforeach; ?>
                                                             
                                                        </tr>
                                                        <?php $i++; endforeach; ?>

                                                    </tbody>
                                   </table>	
										
									</div>

									<div id="tabs-5">
										  <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                                       <tr>
                                                            <th>Slot\Shift</th>
                                                            <?php $j=1; foreach($shift as $srow):?>
                                                            <th class="center"><font color="#0066FF">Shift <?php echo $j;?><br><?php echo "( ".$srow->from." - ".$srow->to." )"?></font></th>
                                                            <?php $j++; endforeach; ?>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $i=1; foreach($machine as $mrow): ?>
                                                        <tr>
                                                            <td>Slot <?php echo $i; ?></td>
                                                           <?php $j=1; foreach($shift as $srow):?>
                                                          <td class="center">
															<label>
																<input name="s<?php echo $j; ?>s<?php echo $i; ?>thu" type="checkbox"<?php foreach($slot as $row): if($row->slot_id == $srow->shift_id."s".$i."thu"){ ?> checked="checked" disabled="disabled"<?php foreach($pat as $prow): if($row->pat_id == $prow->pat_id){?> title="(Name: <?php echo $prow->name; ?>) (IC: <?php echo $prow->pat_ic; ?>)" <?php }endforeach; } endforeach; ?> class="ace ace-checkbox-2" value="<?php echo $srow->shift_id; ?>s<?php echo $i; ?>thu" />
																<span class="lbl"></span>
															</label>
														</td>
														<?php $j++; endforeach; ?>
                                                             
                                                        </tr>
                                                        <?php $i++; endforeach; ?>

                                                    </tbody>
                                   </table>	
									</div>

									<div id="tabs-6">
										  <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                                        <tr>
                                                            <th>Slot\Shift</th>
                                                            <?php $j=1; foreach($shift as $srow):?>
                                                            <th class="center"><font color="#0066FF">Shift <?php echo $j;?><br><?php echo "( ".$srow->from." - ".$srow->to." )"?></font></th>
                                                            <?php $j++; endforeach; ?>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $i=1; foreach($machine as $mrow): ?>
                                                        <tr>
                                                            <td>Slot <?php echo $i; ?></td>
                                                           <?php $j=1; foreach($shift as $srow):?>
                                                          <td class="center">
															<label>
																<input name="s<?php echo $j; ?>s<?php echo $i; ?>fri" type="checkbox"<?php foreach($slot as $row): if($row->slot_id == $srow->shift_id."s".$i."fri"){ ?> checked="checked" disabled="disabled"<?php foreach($pat as $prow): if($row->pat_id == $prow->pat_id){?> title="(Name: <?php echo $prow->name; ?>) (IC: <?php echo $prow->pat_ic; ?>)" <?php }endforeach; } endforeach; ?> class="ace ace-checkbox-2" value="<?php echo $srow->shift_id; ?>s<?php echo $i; ?>fri" />
																<span class="lbl"></span>
															</label>
														</td>
														<?php $j++; endforeach; ?>
                                                             
                                                        </tr>
                                                        <?php $i++; endforeach; ?>

                                                    </tbody>
                                   </table>	
										
									</div>

									<div id="tabs-7">
											  <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                                        <tr>
                                                            <th>Slot\Shift</th>
                                                            <?php $j=1; foreach($shift as $srow):?>
                                                            <th class="center"><font color="#0066FF">Shift <?php echo $j;?><br><?php echo "( ".$srow->from." - ".$srow->to." )"?></font></th>
                                                            <?php $j++; endforeach; ?>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $i=1; foreach($machine as $mrow): ?>
                                                        <tr>
                                                            <td>Slot <?php echo $i; ?></td>
                                                           <?php $j=1; foreach($shift as $srow):?>
                                                          <td class="center">
															<label>
																<input name="s<?php echo $j; ?>s<?php echo $i; ?>sat" type="checkbox"<?php foreach($slot as $row): if($row->slot_id == $srow->shift_id."s".$i."sat"){ ?> checked="checked" disabled="disabled"<?php foreach($pat as $prow): if($row->pat_id == $prow->pat_id){?> title="(Name: <?php echo $prow->name; ?>) (IC: <?php echo $prow->pat_ic; ?>)" <?php }endforeach; } endforeach; ?> class="ace ace-checkbox-2" value="<?php echo $srow->shift_id; ?>s<?php echo $i; ?>sat" />
																<span class="lbl"></span>
															</label>
														</td>
														<?php $j++; endforeach; ?>
                                                             
                                                        </tr>
                                                        <?php $i++; endforeach; ?>

                                                    </tbody>
                                   </table>	
									</div>
								</div>
                               
                                 <div class="hr hr-dotted"></div>
                                
                                 <div class="space-8"></div>
                                 <h3 class="lighter block green">Medical Images( if any )</h3>

								<div style="border: 1px solid rgb(221, 221, 221);">
						            <div class="row" style="margin:10px;">
										<div class="col-sm-3">
							            	<input multiple="" name="img1" type="file" id="id-input-file-3" />
										</div>

										<div class="col-sm-9">
											<div class="row">
												<div class="col-sm-5">
													
														<div class="form-group">
															<label class="col-sm-4 control-label" style="text-align: left;">Image Date</label>
															<div class="col-sm-8">
																<div class="input-group">
																	<input name="img1_date" class="form-control date-picker" id="id-date-picker-4" type="text" data-date-format="dd-MM-yyyy" />
																	<span class="input-group-addon">
																		<i class="icon-calendar bigger-110"></i>
																	</span>
																</div>
															</div>
														</div>
													
												</div>
											</div>

											<div class="row">
												<div class="col-xs-12">
													<label class="control-label alignleft">Comment</label>
													<textarea name="img1_comment" class="form-control" rows="3"></textarea>
													
												</div>
											</div>
										</div>
						            </div>
					            </div>
                                 <div class="space-8"></div>
                                <div style="border: 1px solid rgb(221, 221, 221);">
						            <div class="row" style="margin:10px;">
										<div class="col-sm-3">
							            	<input multiple="" name="img2" type="file" id="id-input-file-4" />
										</div>

										<div class="col-sm-9">
											<div class="row">
												<div class="col-sm-5">
													
														<div class="form-group">
															<label class="col-sm-4 control-label" style="text-align: left;">Image Date</label>
															<div class="col-sm-8">
																<div class="input-group">
																	<input name="img2_date" class="form-control date-picker" id="id-date-picker-5" type="text" data-date-format="dd-MM-yyyy" />
																	<span class="input-group-addon">
																		<i class="icon-calendar bigger-110"></i>
																	</span>
																</div>
															</div>
														</div>
													
												</div>
											</div>

											<div class="row">
												<div class="col-xs-12">
													<label class="control-label alignleft">Comment</label>
													<textarea name="img2_comment" class="form-control" rows="3"></textarea>
													
												</div>
											</div>
										</div>
						            </div>
					            </div>
                                
                                 <div class="space-8"></div>
                                <div style="border: 1px solid rgb(221, 221, 221);">
						            <div class="row" style="margin:10px;">
										<div class="col-sm-3">
							            	<input multiple="" name="img3" type="file" id="id-input-file-5" />
										</div>

										<div class="col-sm-9">
											<div class="row">
												<div class="col-sm-5">
													
														<div class="form-group">
															<label class="col-sm-4 control-label" style="text-align: left;">Image Date</label>
															<div class="col-sm-8">
																<div class="input-group">
																	<input name="img3_date" class="form-control date-picker" id="id-date-picker-6" type="text" data-date-format="dd-MM-yyyy" />
																	<span class="input-group-addon">
																		<i class="icon-calendar bigger-110"></i>
																	</span>
																</div>
															</div>
														</div>
													
												</div>
											</div>

											<div class="row">
												<div class="col-xs-12">
													<label class="control-label alignleft">Comment</label>
													<textarea name="img3_comment" class="form-control" rows="3"></textarea>
													
												</div>
											</div>
										</div>
						            </div>
					            </div>
														</div>

														<div class="step-pane" id="step3">
															
                                                            <div class="row">
                                                        <div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h5><input type="checkbox" id="problem1"/>Genitourinary System ESRD Secondary To </h5>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="ou" id="group1" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Obstructive Uropathy</span>
														</label>
													</div>

													<div class="space-1"></div>

													<div class="checkbox">
														<label>
															<input name="an" id="group1" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Analgesic Nephropathy</span>
														</label>
													</div>

													<div class="space-1"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="group1_1" type="checkbox" class="ace" />
															<span class="lbl"> Prostatic Hyperplasia</span>

															<div class="radio">
																<label>
																	<input name="ph" id="group1rb" type="radio" class="ace" value="b" />
																	<span class="lbl"> Benign</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="ph" id="group1rb" type="radio" class="ace" value="m" />
																	<span class="lbl"> Malignant</span>
																</label>
															</div>

														</label>
													</div>

													<div class="space-1"></div>

													<div class="checkbox">
														<label>
															<input name="ln" id="group1" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Lupus Nephritis</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="gses_other" id="group1" class="form-control" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div><!-- /span -->

                                    <div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="problem2"/>Endocrine</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="dm" id="group2" type="checkbox" class="ace" value="1" />
															<span class="lbl"> DM Type 2</span>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="hl" id="group2" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Hyperlipidemia</span>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="hc" id="group2" type="checkbox" class="ace" value="1" />
															<span class="lbl"> HyperCholesterolemia</span>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="sh" id="group2" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Secondary Hyperparathyroidism</span>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="th" id="group2" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Tertiary Hyperparathyroidism</span>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="php" id="group2" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Post Hyperparathyroidism</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="endo_other" id="group2" class="form-control" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div><!-- /span -->
                                   <div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="problem3"/>Gastrointestinal</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="space-6"></div>
													<div class="checkbox">
														<label>
															<input name="ugb" id="group3" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Upper Gastrointestinal Bleeding</span>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="ugbh" id="group3" type="checkbox" class="ace" value="1" />
															<span class="lbl"> (Upper GI Bleed) Hemorrhoids</span>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="ld" id="group3" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Liver Disease</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="gastro_other" id="group3" class="form-control" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div><!-- /span -->

								</div><!-- /.1strow -->

								<hr>

                                    <div class="row">
									<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="problem4"/>Respiratory System</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="coad" id="group4" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Chronic Obstructive Airway Disease</span>
														</label>
													</div>

													<div class="space-1"></div>

													<div class="checkbox">
														<label>
															<input name="ba" id="group4" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Bronchial Asthma</span>
														</label>
													</div>

													<div class="space-1"></div>

													<div class="checkbox">
														<label>
															<input name="bc" id="group4" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Bronchiectasis</span>
														</label>
													</div>

													<div class="space-1"></div>

													<div class="checkbox">
														<label>
															<input name="pt" id="group4_1" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Pulmonary Tuberculosis</span><br></label>
													</div>
                                                    <div class="space-6"></div>

															<label >Completed Treatment</label>

															<div class="row">
																<div class="col-xs-8 col-sm-11">
																	<div class="input-group">
																		<input name="pt_end_date" class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy">
																		<span class="input-group-addon">
																			<i class="icon-calendar bigger-110"></i>
																		</span>
																	</div>
																</div>
															</div>
                                                            <div class="space-8"></div>
                                                            <div class="space-8"></div>

															<label >On Treatment (Date Started)</label>
															<div class="row">
																<div class="col-xs-8 col-sm-11">
																	<div class="input-group">
																		<input name="pt_start_date" class="form-control date-picker" id="id-date-picker-2" type="text" data-date-format="dd-mm-yyyy">
																		<span class="input-group-addon">
																			<i class="icon-calendar bigger-110"></i>
																		</span>
																	</div>
																</div>
															</div>
														

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="res_system_other" id="group4" class="form-control" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div><!-- /span -->

									

								<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="problem5"/>Musculoskeletal</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="space-4"></div>
													<div class="checkbox">
														<label>
															<input name="ga" id="group5" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Gouty Arthropathy</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="bka" id="group5" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Below knee amputation (BKA)</span>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="aka" id="group5" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Above knee amputation (AKA)</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="ra" id="group5" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Ray's Amputation</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="art" id="group5" type="checkbox" class="ace" value="1"/>
															<span class="lbl"> Arthritis</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="musc_other" id="group5" class="form-control" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div><!-- /span -->
									<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="problem6"/>Cardiovascular</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="group6_1" type="checkbox" class="ace" />
															<span class="lbl"> Ischemic Heart Disease</span>

															<div class="radio">
																<label>
																	<input name="ihd" id="group6rb" type="radio" class="ace" value="1" />
																	<span class="lbl"> 1 Vessel Disease</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="ihd" id="group6rb" type="radio" class="ace" value="2" />
																	<span class="lbl"> 2 Vessel Disease</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="ihd" id="group6rb" type="radio" class="ace" value="3" />
																	<span class="lbl"> 3 Vessel Disease</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="hypertension" id="group6" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Hypertension</span>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="mi" id="group6" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Myocardial Infarct</span>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="post_cabg" id="group6" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Post CABG</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="card_other" id="group6" class="form-control" rows="3"></textarea>


												</div>
											</div>
										</div>
									</div><!-- /span -->

								</div><!-- /.2ndrow -->

								<hr>

								<div class="row">
									<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="problem7"/>Hematological</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="space-4"></div>
													<div class="checkbox">
														<label>
															<input name="cml" id="group7" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Chronic Myeloid Leukemia (CML)</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="aml" id="group7" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Acute Myeloid Leukemia (AML)</span>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="lymphoma" id="group7" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Lymphoma</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="anemia" id="group7" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Anemia</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="poly" id="group7" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Polycythemia</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="hema_other" id="group7" class="form-control" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div><!-- /span -->
									<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="problem8"/>Neurological</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="group8_1" type="checkbox" class="ace" />
															<span class="lbl"> Cerebrovascular Accident (CVA)</span>

															<div class="radio">
																<label>
																	<input name="cva" id="group8rb" type="radio" class="ace" value="lh" />
																	<span class="lbl"> Left Hemiplegia</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="cva" id="group8rb" type="radio" class="ace" value="rh" />
																	<span class="lbl"> Right Hemiplegia</span>
																</label>
															</div>

														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="pn" id="group8" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Peripheral Neuropathy</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="neuro_other" id="group8" class="form-control" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div><!-- /span -->
                                 <div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="problem9"/>Other Problems</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="other_problem" id="group9" class="form-control" rows="3"></textarea>
												</div>
											</div>
										</div>
								  </div><!-- /span -->
								</div><!-- /.3rdrow -->
                                
                                <hr>

								<div class="row center">
                                 <div class="col-xs-12 col-sm-12 center">
                                 <div class="right">
										<div class="widget-box center">
											<div class="widget-header">
												<h4><input type="checkbox" id="summary1"/>Summary</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<label class="control-label" for="address-2">Summary of Identified Problems</label>
                                					<textarea name="sum_problem" id="group10" class="form-control" rows="3"></textarea>
                                                    <label class="control-label" for="address-2">Summary of Examination</label>
                                					<textarea name="sum_examination" id="group10" class="form-control" rows="3"></textarea>
												</div>
											</div>
										</div>
                                        </div>
								  </div><!-- /span -->
								</div><!-- /.4rdrow -->

																
															
														</div>
                                                        

														<div class="step-pane" id="step4">
															<div class="row">
									<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="med1"/>Angiotensin Receptor Blocker</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="space-3"></div>
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group1_1" type="checkbox" class="ace" />
															<span class="lbl"> Losartan</span>

															<div class="radio">
																<label>
																	<input name="losartan" id="med_group1_1rb" type="radio" class="ace" value="50mg"/>
																	<span class="lbl"> 50mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="losartan" id="med_group1_1rb" type="radio" class="ace" value="100mg" />
																	<span class="lbl"> 100mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group1_2" type="checkbox" class="ace" />
															<span class="lbl"> Losartan/HCTZ</span>

															<div class="radio">
																<label>
																	<input name="losartan_hctz" id="med_group1_2rb" type="radio" class="ace" value="50/12.5mg" />
																	<span class="lbl"> 50/12.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="losartan_hctz" id="med_group1_2rb" type="radio" class="ace" value="100/12.5mg" />
																	<span class="lbl"> 100/12.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="losartan_hctz" id="med_group1_2rb" type="radio" class="ace" value="100/25mg" />
																	<span class="lbl"> 100/25mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group1_3" type="checkbox" class="ace" />
															<span class="lbl"> Ibersartan</span>

															<div class="radio">
																<label>
																	<input name="ibersartan" id="med_group1_3rb" type="radio" class="ace" value="150mg" />
																	<span class="lbl"> 150mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="ibersartan" id="med_group1_3rb" type="radio" class="ace" value="300mg" />
																	<span class="lbl"> 300mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group1_4" type="checkbox" class="ace" />
															<span class="lbl"> Ibersartan/HCTZ</span>

															<div class="radio">
																<label>
																	<input name="ibersartan_hctz" id="med_group1_4rb" type="radio" class="ace" value="150/12.5mg" />
																	<span class="lbl"> 150/12.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="ibersartan_hctz" id="med_group1_4rb" type="radio" class="ace" value="150/25mg" />
																	<span class="lbl"> 150/25mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="ibersartan_hctz" id="med_group1_4rb" type="radio" class="ace" value="300/12.5mg" />
																	<span class="lbl"> 300/12.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="ibersartan_hctz" id="med_group1_4rb" type="radio" class="ace" value="300/25mg" />
																	<span class="lbl"> 300/25mg OD</span>
																</label>
															</div>
														</label>

													</div>

													<div class="space-6"></div>
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group1_5" type="checkbox" class="ace" />
															<span class="lbl"> Valsartan</span>

															<div class="radio">
																<label>
																	<input name="valsartan" id="med_group1_5rb" type="radio" class="ace" value="80mg" />
																	<span class="lbl"> 80mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="valsartan" id="med_group1_5rb" type="radio" class="ace" value="160mg" />
																	<span class="lbl"> 160mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="valsartan" id="med_group1_5rb" type="radio" class="ace" value="320mg" />
																	<span class="lbl"> 320mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group1_6" type="checkbox" class="ace" />
															<span class="lbl"> Olmesartan</span>

															<div class="radio">
																<label>
																	<input name="olmesartan" id="med_group1_6rb" type="radio" class="ace" value="20mg" />
																	<span class="lbl"> 20mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="olmesartan" id="med_group1_6rb" type="radio" class="ace" value="40mg" />
																	<span class="lbl"> 40mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group1_7" type="checkbox" class="ace" />
															<span class="lbl"> Telmisartan</span>

															<div class="radio">
																<label>
																	<input name="telmisartan" id="med_group1_7rb" type="radio" class="ace" value="20mg" />
																	<span class="lbl"> 20mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="telmisartan" id="med_group1_7rb" type="radio" class="ace" value="40mg" />
																	<span class="lbl"> 40mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="telmisartan" id="med_group1_7rb" type="radio" class="ace" value="80mg" />
																	<span class="lbl"> 80mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="arb_other" id="med_group1_8" class="form-control" rows="3"></textarea>

												</div>
											</div>
										</div>
									</div><!-- /span -->

									<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="med2"/>Beta Blockers</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group2_1" type="checkbox" class="ace" />
															<span class="lbl"> Atenolol</span>

															<div class="radio">
																<label>
																	<input name="atenolol" id="med_group2_1rb" type="radio" class="ace" value="25mg" />
																	<span class="lbl"> 25mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="atenolol" id="med_group2_1rb" type="radio" class="ace" value="50mg" />
																	<span class="lbl"> 50mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="atenolol" id="med_group2_1rb" type="radio" class="ace" value="75mg" />
																	<span class="lbl"> 75mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="atenolol" id="med_group2_1rb" type="radio" class="ace" value="100mg" />
																	<span class="lbl"> 100mg OD</span>
																</label>
															</div>


														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group2_2" type="checkbox" class="ace" />
															<span class="lbl"> Metaprolol</span>

															<div class="radio">
																<label>
																	<input name="metaprolol" id="med_group2_2rb" type="radio" class="ace" value="25mg" />
																	<span class="lbl"> 25mg BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="metaprolol" id="med_group2_2rb" type="radio" class="ace" value="50mg" />
																	<span class="lbl"> 50mg BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="metaprolol" id="med_group2_2rb" type="radio" class="ace" value="100mg" />
																	<span class="lbl"> 100mg BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="metaprolol" id="med_group2_2rb" type="radio" class="ace" value="150mg" />
																	<span class="lbl"> 150mg BD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group2_3" type="checkbox" class="ace" />
															<span class="lbl"> Bisoprolol</span>

															<div class="radio">
																<label>
																	<input name="bisoprolol" id="med_group2_3rb" type="radio" class="ace" value="1.25mg" />
																	<span class="lbl"> 1.25mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="bisoprolol" id="med_group2_3rb" type="radio" class="ace" value="2.5mg" />
																	<span class="lbl"> 2.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="bisoprolol" id="med_group2_3rb" type="radio" class="ace" value="5mg" />
																	<span class="lbl"> 5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="bisoprolol" id="med_group2_3rb" type="radio" class="ace" value="7.5mg" />
																	<span class="lbl"> 7.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="bisoprolol" id="med_group2_3rb" type="radio" class="ace" value="10mg" />
																	<span class="lbl"> 10mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group2_4" type="checkbox" class="ace" />
															<span class="lbl"> Carvidelol</span>

															<div class="radio">
																<label>
																	<input name="carvidelol" id="med_group2_4rb" type="radio" class="ace" value="3.12mg" />
																	<span class="lbl"> 3.125mg BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="carvidelol" id="med_group2_4rb" type="radio" class="ace" value="6.25mg" />
																	<span class="lbl"> 6.25mg BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="carvidelol" id="med_group2_4rb" type="radio" class="ace" value="12.5mg" />
																	<span class="lbl"> 12.5mg BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="carvidelol" id="med_group2_4rb" type="radio" class="ace" value="25mg" />
																	<span class="lbl"> 25mg BD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="beta_other" id="med_group2_5" class="form-control" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div><!-- /span -->

									

									<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="med3"/>ACE-Inhibitors</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group3_1" type="checkbox" class="ace" />
															<span class="lbl"> Enalapril</span>

															<div class="radio">
																<label>
																	<input name="enalapril" id="med_group3_1rb" type="radio" class="ace" value="2.5mg" />
																	<span class="lbl"> 2.5mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="enalapril" id="med_group3_1rb" type="radio" class="ace" value="5mg" />
																	<span class="lbl"> 5mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="enalapril" id="med_group3_1rb" type="radio" class="ace" value="10mg" />
																	<span class="lbl"> 10mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="enalapril" id="med_group3_1rb" type="radio" class="ace" value="15mg" />
																	<span class="lbl"> 15mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="enalapril" id="med_group3_1rb" type="radio" class="ace" value="20mg" />
																	<span class="lbl"> 20mg OD/BD</span>
																</label>
															</div>

														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group3_2" type="checkbox" class="ace" />
															<span class="lbl"> Captopril</span>

															<div class="radio">
																<label>
																	<input name="captopril" id="med_group3_2rb" type="radio" class="ace" value="6.2mg" />
																	<span class="lbl"> 6.25mg TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="captopril" id="med_group3_2rb" type="radio" class="ace" value="12.5mg" />
																	<span class="lbl"> 12.5mg TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="captopril" id="med_group3_2rb" type="radio" class="ace" value="25mg" />
																	<span class="lbl"> 25mg TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="captopril" id="med_group3_2rb" type="radio" class="ace" value="50mg" />
																	<span class="lbl"> 50mg TDS</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="ace_other" id="med_group3_3" class="form-control" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div><!-- /span -->

									

								</div><!-- /.1strow -->
<hr>

								<div class="row">
									<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="med4"/>Calcium Channel Blockers</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group4_1" type="checkbox" class="ace" />
															<span class="lbl"> Amlodipine</span>

															<div class="radio">
																<label>
																	<input name="amlodipine" id="med_group4_1rb" type="radio" class="ace" value="2.5mg" />
																	<span class="lbl"> 2.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="amlodipine" id="med_group4_1rb" type="radio" class="ace" value="5mg" />
																	<span class="lbl"> 5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="amlodipine" id="med_group4_1rb" type="radio" class="ace" value="7.5mg" />
																	<span class="lbl"> 7.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="amlodipine" id="med_group4_1rb" type="radio" class="ace" value="10mg" />
																	<span class="lbl"> 10mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group4_2" type="checkbox" class="ace" />
															<span class="lbl"> Felodipine</span>

															<div class="radio">
																<label>
																	<input name="felodipine" id="med_group4_2rb" type="radio" class="ace" value="5mg" />
																	<span class="lbl"> 5mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="felodipine" id="med_group4_2rb" type="radio" class="ace" value="10mg" />
																	<span class="lbl"> 10mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="felodipine" id="med_group4_2rb" type="radio" class="ace" value="15mg" />
																	<span class="lbl"> 15mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="felodipine" id="med_group4_2rb" type="radio" class="ace" value="20mg" />
																	<span class="lbl"> 20mg OD/BD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="ccb_other" id="med_group4_3" class="form-control" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div><!-- /span -->

									<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="med5"/>Activated Vitamin D</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group5_1" type="checkbox" class="ace" />
															<span class="lbl"> Calcitriol</span>

															<div class="radio">
																<label>
																	<input name="calcitriol" id="med_group5_1rb" type="radio" class="ace" value="0.25mcg" />
																	<span class="lbl"> 0.25mcg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcitriol" id="med_group5_1rb" type="radio" class="ace" value="0.5mcg" />
																	<span class="lbl"> 0.5mcg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcitriol" id="med_group5_1rb" type="radio" class="ace" value="1mcg" />
																	<span class="lbl"> 1mcg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group5_2" type="checkbox" class="ace" />
															<span class="lbl"> 1-α Calcidol</span>

															<div class="radio">
																<label>
																	<input name="calcidol" id="med_group5_2rb" type="radio" class="ace" value="0.25mcg" />
																	<span class="lbl"> 0.25mcg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcidol" id="med_group5_2rb" type="radio" class="ace" value="0.5mcg" />
																	<span class="lbl"> 0.5mcg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcidol" id="med_group5_2rb" type="radio" class="ace" value="1mcg" />
																	<span class="lbl"> 1mcg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcidol" id="med_group5_2rb" type="radio" class="ace" value="2mcg" />
																	<span class="lbl"> 2mcg OD/BD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="vitamin_other" id="med_group5_3" class="form-control" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div><!-- /span -->

									<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="med6"/>Hematinics</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group6_1" type="checkbox" class="ace" />
															<span class="lbl"> Ferrous Fumarate</span>

															<div class="radio">
																<label>
																	<input name="ferrous_fumarate" id="med_group6_1rb" type="radio" class="ace" value="200mg" />
																	<span class="lbl"> 200mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="ferrous_fumarate" id="med_group6_1rb" type="radio" class="ace" value="400mg" />
																	<span class="lbl"> 400mg OD BD TDS</span>
																</label>
															</div>

														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group6_2" type="checkbox" class="ace" />
															<span class="lbl"> B Complex</span>

															<div class="radio">
																<label>
																	<input name="b_complex" id="med_group6_2rb" type="radio" class="ace" value="1tab" />
																	<span class="lbl"> 1 tab OD</span>
																</label>
															</div>

														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group6_3" type="checkbox" class="ace" />
															<span class="lbl"> Folate</span>

															<div class="radio">
																<label>
																	<input name="folate" id="med_group6_3rb" type="radio" class="ace" value="1tab" />
																	<span class="lbl"> 1 tab OD</span>
																</label>
															</div>

														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="hematinics_other" id="med_group6_4" class="form-control" rows="3"></textarea>

												</div>
											</div>
										</div>
									</div><!-- /span -->
								</div><!-- /.2ndrow -->
                                <hr>

								<div class="row">
									<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="med7"/>Alpha adrenoceptor Blocker</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="space-4"></div>
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group7_1" type="checkbox" class="ace" />
															<span class="lbl"> Prazosin</span>

															<div class="radio">
																<label>
																	<input name="prazosin" id="med_group7_1rb" type="radio" class="ace" value="1mg" />
																	<span class="lbl"> 1mg BD/TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="prazosin" id="med_group7_1rb" type="radio" class="ace" value="2mg" />
																	<span class="lbl"> 2mg BD/TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="prazosin" id="med_group7_1rb" type="radio" class="ace" value="3mg" />
																	<span class="lbl"> 3mg BD/TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="prazosin" id="med_group7_1rb" type="radio" class="ace" value="4mg" />
																	<span class="lbl"> 4mg BD/TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="prazosin" id="med_group7_1rb" type="radio" class="ace" value="5mg" />
																	<span class="lbl"> 5mg BD/TDS</span>
																</label>
															</div>

														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="aab_other" id="med_group7_2" class="form-control" rows="3"></textarea>


												</div>
											</div>
										</div>
									</div><!-- /span -->
									
									<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="med8"/>Vasodilators</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="space-4"></div>
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group8_1" type="checkbox" class="ace" />
															<span class="lbl"> Isordil</span>

															<div class="radio">
																<label>
																	<input name="isordil" id="med_group8_1rb" type="radio" class="ace" value="10mg" />
																	<span class="lbl"> 10mg TDS</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group8_2" type="checkbox" class="ace" />
															<span class="lbl"> Minoxidil</span>

															<div class="radio">
																<label>
																	<input name="minoxidil" id="med_group8_2rb" type="radio" class="ace" value="10mg" />
																	<span class="lbl"> 10mg TDS</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="vasodilators_other" id="med_group8_3" class="form-control" rows="3"></textarea>

												</div>
											</div>
										</div>
									</div><!-- /span -->

									

									<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="med9"/>Phosphate Binders</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group9_1" type="checkbox" class="ace" />
															<span class="lbl"> Calcium Carbonate</span>

															<div class="radio">
																<label>
																	<input name="calcium_carbonate" id="med_group9_1rb" type="radio" class="ace" value="500mg" />
																	<span class="lbl"> 500mg OD BD TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcium_carbonate" id="med_group9_1rb" type="radio" class="ace" value="1000mg" />
																	<span class="lbl"> 1000mg BD/TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcium_carbonate" id="med_group9_1rb" type="radio" class="ace" value="1500mg" />
																	<span class="lbl"> 1500mg BD/TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcium_carbonate" id="med_group9_1rb" type="radio" class="ace" value="2000mg" />
																	<span class="lbl"> 2000mg BD/TDS</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="phosphate_other" id="med_group9_2" class="form-control" rows="3"></textarea>

												</div>
											</div>
										</div>
									</div><!-- /span -->

								</div><!-- /.3rdrow -->
                                <hr>

								<div class="row">
									<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="med10"/>Diuretics</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" id="med_group10_1" type="checkbox" class="ace" />
															<span class="lbl"> Frusemide</span>

															<div class="radio">
																<label>
																	<input name="frusemide" id="med_group10_1rb" type="radio" class="ace" value="40mg" />
																	<span class="lbl"> 40mg TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="frusemide" id="med_group10_1rb" type="radio" class="ace" value="60mg" />
																	<span class="lbl"> 60mg TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="frusemide" id="med_group10_1rb" type="radio" class="ace"  value="80mg"/>
																	<span class="lbl"> 80mg TDS</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="diuretics_other" id="med_group10_2" class="form-control" rows="3"></textarea>

												</div>
											</div>
										</div>
									</div><!-- /span -->
                                    
                                   <div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="med11"/>Erythropoetin</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="space-4"></div>
													<div class="checkbox">
														<label>
															<input name="eprex" id="med_group11_1" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Eprex</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="recormon" id="med_group11_1" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Recormon</span>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="binocrit" id="med_group11_1" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Binocrit</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="mircela" id="med_group11_1" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Mircera</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="ery_other" id="med_group11_1" class="form-control" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div><!-- /span -->

									<div class="col-xs-12 col-sm-4">
										<div class="widget-box">
											<div class="widget-header">
												<h4><input type="checkbox" id="med12"/>Other Medications</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="other_medic" id="med_group12_1" class="form-control" rows="3"></textarea>

												</div>
											</div>
										</div>
									</div><!-- /span -->
								</div><!-- /.4throw -->
                                
                                 <hr>

								<div class="row center">
									<div class="col-xs-12 col-sm-12 center">
										<div class="widget-box center">
											<div class="widget-header">
												<h4><input type="checkbox" id="plan"/>Plan</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<label class="control-label" for="address-2">Clinical Plan</label> 
                                					<textarea name="clinical_plan" id="med_group13_1" class="form-control" rows="3"></textarea>

												</div>
											</div>
										</div>
									</div><!-- /span -->
								</div><!-- /.5throw -->

														</div>
                                                        
													</div>
                                                    </form>

													<hr />
													<div class="row-fluid wizard-actions">
														<button class="btn btn-prev">
															<i class="icon-arrow-left"></i>
															Prev
														</button>

														<button class="btn btn-success btn-next" data-last="Finish ">
															Next
															<i class="icon-arrow-right icon-on-right"></i>
														</button>
													</div>
                                      
												</div><!-- /widget-main -->
											</div><!-- /widget-body -->
                                            
										</div>
									</div>
								</div>

								
								</div><!-- PAGE CONTENT ENDS -->

								
							</div><!-- /.col -->
						</div><!-- /.row -->
                        

						
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
			

					<div class="ace-settings-box" id="ace-settings-box">
						
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
           
        
        <!-- inline scripts related to this page -->

		                             
		</div><!-- /.main-container -->
       

		 <!-- basic scripts -->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
        
		
		<script src="<?php echo base_url(); ?>assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->
        <script src="<?php echo base_url(); ?>assets/js/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/daterangepicker.min.js"></script>

		<script src="<?php echo base_url(); ?>assets/js/fuelux/fuelux.wizard.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/additional-methods.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootbox.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootbox.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.full.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/dropzone.min.js"></script>
		
       

		<!-- ace scripts -->

		<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
        
       
		
		<!-- inline scripts related to this page -->

		<script type="text/javascript">
		
		
			$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				
		
		
			jQuery(function($) {
				
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
			
				$('[data-rel=tooltip]').tooltip();
			
				$(".select2").css('width','200px').select2({allowClear:true})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				}); 
			
			
				var $validation = true;
				$('#fuelux-wizard').ace_wizard().on('change' , function(e, info){
					if(info.step == 1 && $validation) {
						if(!$('#validation-form').valid()) return false;
					}
				}).on('finished', function(e) {
					bootbox.dialog({
						message: "Please wait! the information is being saved", 
						
						
					});
					setTimeout(function() { document.getElementById("validation-form").submit() }, 2000);
					
					
				}).on('stepclick', function(e){
					//return false;//prevent clicking on steps
				});
			
			
				$('#skip-validation').removeAttr('checked').on('click', function(){
					$validation = this.checked;
					if(this.checked) {
						$('#sample-form').hide();
						$('#validation-form').removeClass('hide');
					}
					else {
						$('#validation-form').addClass('hide');
						$('#sample-form').show();
					}
				});
			
			
			
				//documentation : http://docs.jquery.com/Plugins/Validation/validate
			
			
				$.mask.definitions['~']='[+-]';
				$('#phone').mask('(99) 9999-9999');
			
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{2}\) \d{4}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
				
				
				$('#mobile').mask('(999) 999-9999');
			
				jQuery.validator.addMethod("mobile", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid mobile number.");
				
				$('#nkphone').mask('(99) 9999-9999');
			
				jQuery.validator.addMethod("nkphone", function (value, element) {
					return this.optional(element) || /^\(\d{2}\) \d{4}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
				
				
				$('#nkmobile').mask('(999) 999-9999');
			
				jQuery.validator.addMethod("nkmobile", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid mobile number.");
				
				$.mask.definitions['~']='[+-]';
				$('#ic').mask('999999999999');
			
				jQuery.validator.addMethod("ic", function (value, element) {
					return this.optional(element) || /^\d{12}( x\d{1,6})?$/.test(value);
				}, "Enter a valid IC format.");
			
				$('#validation-form').validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: false,
					rules: {
						email: {
							required: true,
							email:true
						},
						nkemail: {
							required: true,
							email:true
						},
						nkname: {
							required: true,
						},
						nkjob: {
							required: true,
						},
						name: {
							required: true
						},
						ic: {
							required: true,
							ic: 'required'
						},
						age: {
							required: true
						},
						phone: {
							required: true,
							phone: 'required'
						},
						mobile: {
							required: true,
							mobile: 'required'
						},
						nkphone: {
							required: true,
							phone: 'required'
						},
						nkmobile: {
							required: true,
							mobile: 'required'
						},
						url: {
							required: true,
							url: true
						},
						address: {
							required: true
						},
						nkaddress: {
							required: true
						},
						state: {
							required: true
						},
						relation: {
							required: true
						},
						subscription: {
							required: true
						},
					},
			
					messages: {
						email: {
							required: "Please provide a valid email.",
							email: "Please provide a valid email."
						},
						nkemail: {
							required: "Please provide a valid email.",
							email: "Please provide a valid email."
						},
						password: {
							required: "Please specify a password.",
							minlength: "Please specify a secure password."
						},
						subscription: "Please choose at least one option",
						agree: "Please accept our policy"
					},
			
					invalidHandler: function (event, validator) { //display error alert on form submit   
						$('.alert-danger', $('.login-form')).show();
					},
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error').addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is(':checkbox') || element.is(':radio')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
			
				
					
				
				$('#modal-wizard .modal-header').ace_wizard();

				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
			})
			
			jQuery(function($) {
				$(".chosen-select").chosen();

				$( "#tabs" ).tabs();

				$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();});
					
					$('#id-input-file-profile').ace_file_input({
					style:'well',
					btn_choose:'Upload Picture',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'fit'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
					

				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Upload Image',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'fit'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				$('#id-input-file-4').ace_file_input({
					style:'well',
					btn_choose:'Upload Image',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'fit'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				$('#id-input-file-5').ace_file_input({
					style:'well',
					btn_choose:'Upload Image',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'fit'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			});
			
			
		</script>
