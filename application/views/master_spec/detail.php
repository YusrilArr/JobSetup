<div class="d-flex justify-content-between">
    <div>

        <a href="<?php echo base_url( 'master_spec' ) ?>" class="btn btn-success">
            <i class="fa fa-backward"> </i> Back
        </a>
    </div>
    <div>

        <a href="<?php echo base_url( 'master_spec/edit/' . $master_spec->no_spec ) ?>" class="btn btn-warning mr-3">
            <i class="fa fa-edit"> </i> Edit Data
        </a>
    </div>
</div>

<hr>
<table class="table table-striped">
    <tr>
        <th colspan="4">No Spesifikasi :
            <?php echo $master_spec->no_spec ?>
        </th>
    </tr>
    <tr>
        <td style="width: 280px;">Thickness Drive Side (mm)</td>
        <td style="width: 300px">:
            <?php echo $master_spec->thick_drive_side ?>
        </td>
        <td style="width: 280px;">Thickness Center (mm)</td>
        <td>:
            <?php echo $master_spec->thick_center ?>
        </td>
    </tr>

    <tr>
        <td>Thickness Heater Side (mm)</td>
        <td>:
            <?php echo $master_spec->thick_heather_side ?>
        </td>
        <td>Width (mm)</td>
        <td>:
            <?php echo $master_spec->width ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Fabric Tension Before Calender (Kg)</td>
        <td>:
            <?php echo $master_spec->fabric_before_calender ?>
        </td>
        <td>Fabric Tension After Calender (Kg)</td>
        <td>:
            <?php echo $master_spec->fabric_after_calender ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Crossing Heather Side 1&4</td>
        <td>:
            <?php echo $master_spec->crossing_hs_1_4 ?>
        </td>
        <td>Crossing Drive Side 1&4</td>
        <td>:
            <?php echo $master_spec->crossing_ds_1_4 ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Gap Roll Drive Side 1-2</td>
        <td>:
            <?php echo $master_spec->gaproll_ds_1_2 ?>
        </td>
        <td>Gap Roll Drive Side 3-4</td>
        <td>:
            <?php echo $master_spec->gaproll_ds_3_4 ?>
        </td>
    </tr>
    <tr>
        <td>Gap Roll Drive Side 2-3</td>
        <td>:
            <?php echo $master_spec->gaproll_ds_2_3 ?>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Gap Roll Heather Side 1-2</td>
        <td>:
            <?php echo $master_spec->gaproll_hs_1_2 ?>
        </td>
        <td>Gap Roll Heather Side 3-4</td>
        <td>:
            <?php echo $master_spec->gaproll_hs_3_4 ?>
        </td>
    </tr>
    <tr>
        <td>Gap Roll Heather Side 2-3</td>
        <td>:
            <?php echo $master_spec->gaproll_hs_2_3 ?>
        </td>
        <td></td>
        <td></td>
    </tr>

</table>



<hr>


<!-- <table class="table table-striped">
    <thead>
        <tr>
            <th width="25%">No Specification </th>
            <th>:
                <?php echo $master_spec->no_spec ?>
            </th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>Thickness Drive Side (mm)</td>
            <td>:
                <?php echo $master_spec->thick_drive_side ?>
            </td>

        </tr>

        <tr>
            <td>Thickness Center (mm)</td>
            <td>:
                <?php echo $master_spec->thick_center ?>
            </td>
        </tr>

       

        <tr>
            <td>Thickness Heater Side (mm)</td>
            <td>:
                <?php echo $master_spec->thick_heather_side ?>
            </td>
        </tr>

        <tr>
            <td>Width (mm)</td>
            <td>:
                <?php echo $master_spec->width ?>
            </td>
        </tr>
        <tr>
            <td>Fabric Tension Before Calender (Kg)</td>
            <td>:
                <?php echo $master_spec->fabric_before_calender ?>
            </td>
        </tr>
        <tr>
            <td>Fabric Tension After Calender (Kg)</td>
            <td>:
                <?php echo $master_spec->fabric_after_calender ?>
            </td>
        </tr>
        <tr>
            <td>Crossing Heather Side 1&4</td>
            <td>:
                <?php echo $master_spec->crossing_hs_1_4 ?>
            </td>
        </tr>
        <tr>
            <td>Crossing Drive Side 1&4</td>
            <td>:
                <?php echo $master_spec->crossing_ds_1_4 ?>
            </td>
        </tr>
        <tr>
            <td>Gap Roll Drive Side 1-2</td>
            <td>:
                <?php echo $master_spec->gaproll_ds_1_2 ?>
            </td>
        </tr>
        <tr>
            <td>Gap Roll Drive Side 2-3</td>
            <td>:
                <?php echo $master_spec->gaproll_ds_2_3 ?>
            </td>
        </tr>
        <tr>
            <td>Gap Roll Drive Side 3-4</td>
            <td>:
                <?php echo $master_spec->gaproll_ds_3_4 ?>
            </td>
        </tr>
        <tr>
            <td>Gap Roll Heather Side 1-2</td>
            <td>:
                <?php echo $master_spec->gaproll_hs_1_2 ?>
            </td>
        </tr>
        <tr>
            <td>Gap Roll Heather Side 2-3</td>
            <td>:
                <?php echo $master_spec->gaproll_hs_2_3 ?>
            </td>
        </tr>
        <tr>
            <td>Gap Roll Heather Side 3-4</td>
            <td>:
                <?php echo $master_spec->gaproll_hs_3_4 ?>
            </td>
        </tr>

        <!-- <tr>
            <td>Tanggal Update</td>
            <td>:
                <?php echo $master_spec->tanggal_update ?>
            </td>
        </tr> -->
</tbody>
</table>
</hr>