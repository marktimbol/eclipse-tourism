@include('emails._header')
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		    <tr>
		        <td bgcolor="#ffffff" align="center" style="padding: 15px 15px 15px 15px;" class="section-padding">
		            <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
		                <tr>
		                    <td>
		                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
		                            <tr>
		                                <td align="center" style="font-size: 32px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding-copy">
		                                	Your Booking Information
		                                </td>
		                            </tr>
		                            <tr>
		                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">
		                                	Hi {{ $user->name }}, thank you for booking your tours with us. One of our customer representative will contact you shortly.
		                                </td>
		                            </tr>
		                        </table>
		                    </td>
		                </tr>
		            </table>
		        </td>
		    </tr>
		</table>

		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		    <tr>
		        <td bgcolor="#ffffff" align="center" style="padding: 15px 15px 15px 15px;" class="section-padding">
		            <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
		                <tr>
		                    <td>
		                    	<table width="500" border="0">

		                    		<?php
		                    			$subtotal = 0;
		                    			$total = 0;
		                    		?>
		                    		@foreach( $data as $package )

		                    			<?php
											$adultPrice = $package->adult_price;
											$childPrice = $package->child_price;
											$ticketName = '';

											if( $package->has_ticket_option )
											{
												$ticketId = $package->pivot->ticket;

												foreach( $package->tickets as $ticket )
												{
													if( $ticketId == $ticket->id )
													{
														$adultPrice = $ticket->adultPrice;
														$childPrice = $ticket->childPrice;
														$ticketName = $ticket->name . ' Ticket';
													}
												}
											}
		                    			?>

			                    		<tr style="border-top: 1px dashed #aaaaaa;">
			                        		<td style="font-family: Arial, sans-serif; color: #333333; font-size: 16px; padding-top: 10px;">
			                        			{{ $ticketName }}<br />
			                        			{{ $package->name }} 
			                        				<span style="color: #888; font-size: 14px; !important">
			                        					( 
			                        						{{ $package->pivot->adult_quantity }} 
			                        							&times; 
			                        						{{ formatNumber( $adultPrice ) }} 
			                        					AED )
			                        				</span>
			                        		</td>
			                        		<td align="right" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">
	                    						AED {{ formatNumber( $package->pivot->adult_quantity * $adultPrice ) }} 
			                        		</td>
			                      		</tr>
										<tr>
											<td style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">
												Child
		                        				<span style="color: #888; font-size: 14px !important;">
		                        					( 
		                        						{{ $package->pivot->child_quantity }} 
		                        							&times; 
		                        						{{ formatNumber( $childPrice ) }} 
		                        					AED )
		                        				</span>											
											</td>
											<td align="right" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">
												AED {{ formatNumber( $package->pivot->child_quantity * $childPrice ) }} 
											</td>
										</tr>
					                    <tr>
					                    	<td>&nbsp;</td>
					                        <td>&nbsp;</td>
					                    </tr>

					                    <?php 
					                    	$subtotal = ( $package->pivot->adult_quantity * $package->adultPrice ) +
					                    				( $package->pivot->child_quantity * $package->childPrice );

					                    	$total += $subtotal;
					                    ?>
				                    @endforeach

		                    	</table>
		                        
		                      <!-- TWO COLUMNS -->
		                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
		                            <tr>
		                                <td valign="top" style="padding: 0;" class="mobile-wrapper">&nbsp;</td>
		                            </tr>
		                        </table>
		                    </td>
		                </tr>
		                <tr>
		                    <td style="padding: 10px 0 0px 0; border-top: 1px solid #eaeaea; border-bottom: 1px dashed #aaaaaa;">
		                        <!-- TWO COLUMNS -->
		                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
		                            <tr>
		                                <td valign="top" class="mobile-wrapper">
		                                    <!-- LEFT COLUMN -->
		                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="left">
		                                        <tr>
		                                            <td style="padding: 0 0 10px 0;">
		                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
		                                                    <tr>
		                                                        <td align="left" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px; font-weight: bold;">Total</td>
		                                                    </tr>
		                                                </table>
		                                            </td>
		                                        </tr>
		                                    </table>
		                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="right">
		                                        <tr>
		                                            <td>
		                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
		                                                    <tr>
		                                                        <td align="right" style="font-family: Arial, sans-serif; color: #328fcc; font-size: 16px; font-weight: bold;">AED {{ formatNumber( $total ) }}</td>
		                                                    </tr>
		                                                </table>
		                                            </td>
		                                        </tr>
		                                    </table>
		                                </td>
		                            </tr>
		                        </table>
		                    </td>
		                </tr>
		            </table>
		        </td>
		    </tr>
		</table>

@include('emails._footer')
