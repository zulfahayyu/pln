<?php
$this->extend('AppBundle::Layouts/layout-pdf.html.php');
$authorize = \CustomHelper\General::getGlobalVariable('GLOBAL_SITE_USERNAME') . ':' . \CustomHelper\General::getGlobalVariable('GLOBAL_SITE_PASSWORD');

    $benefit = $this->benefit;

    $companyName = $this->CompanyName;

    $has_ip = $this->has_ip;
    $has_op = $this->has_op; 
    $has_d = $this->has_d;
    $has_m = $this->has_m;
    $has_o = $this->has_o;
    $start_date  = $this->StartDate;
    $expired_date = $this->ExpiredDate;
?>

<page size="A4">
    <div class="container">
        <div class="header-letter">
            <div class="row text16" style="text-align:center">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <!-- <img src="<?= \AppHelper\General::getSiteUrl($authorize) ?>/assets/images/mail_icon/axa_logo_solid_rgb-2.png" style="width:15%;margin-bottom: 10px"/> -->
                    <img src="<?= \AppHelper\General::getSiteUrl($authorize) ?>/assets/images/mail_icon/axa_logo_solid_rgb-2.png" style="width:75px;margin-bottom: 10px" />
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="head-name">
                        <label>
                            SmartCare Executive<br />
                            <?= $companyName ?><br />
                            PERIODE POLIS : <?= date_format($start_date,"d M Y") ?> - <?= date_format($expired_date,"d M Y") ?><br />
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-letter text16">
            <table class="insured-table table" border="1">
                <tr>
                    <td rowspan="5" width="25%"><b>Tabel Peserta</b></td>
                    <td><b>Jenis Kelamin</b></td>
                    <?= ($count_ip_300!=0)? '<td><b>IP300</b></td>' : '' ?>
                    <?= ($count_ip_400!=0)? '<td><b>IP400</b></td>' : '' ?>
                    <?= ($count_ip_500!=0)? '<td><b>IP500</b></td>' : '' ?>
                    <?= ($count_ip_750!=0)? '<td><b>IP750</b></td>' : '' ?>
                    <td><b>Total</b></td>
                </tr>
                <tr>
                    <td>LAKI-LAKI</td>
                    <?= ($count_ip_300!=0)? '<td>'. $male_ip_300 .'</td>' : '' ?>
                    <?= ($count_ip_400!=0)? '<td>'. $male_ip_400 .'</td>' : '' ?>
                    <?= ($count_ip_500!=0)? '<td>'. $male_ip_500 .'</td>' : '' ?>
                    <?= ($count_ip_750!=0)? '<td>'. $male_ip_750 .'</td>' : '' ?>
                    <td><?= $total_male_ip; ?></td>
                </tr>
                <tr>
                    <td>PEREMPUAN</td>
                    <?= ($count_ip_300!=0)? '<td>'. $female_ip_300 .'</td>' : '' ?>
                    <?= ($count_ip_400!=0)? '<td>'. $female_ip_400 .'</td>' : '' ?>
                    <?= ($count_ip_500!=0)? '<td>'. $female_ip_500 .'</td>' : '' ?>
                    <?= ($count_ip_750!=0)? '<td>'. $female_ip_750 .'</td>' : '' ?>
                    <td><?= $total_female_ip; ?></td>
                </tr>
                <tr>
                    <td>ANAK-ANAK</td>
                    <?= ($count_ip_300!=0)? '<td>'. $child_ip_300 .'</td>' : '' ?>
                    <?= ($count_ip_400!=0)? '<td>'. $child_ip_400 .'</td>' : '' ?>
                    <?= ($count_ip_500!=0)? '<td>'. $child_ip_500 .'</td>' : '' ?>
                    <?= ($count_ip_750!=0)? '<td>'. $child_ip_750 .'</td>' : '' ?>
                    <td><?= $total_child_ip; ?></td>
                </tr>
                <tr>
                    <td><b>Total<b></td>
                    <?= ($count_ip_300!=0)? '<td><b>'. $count_ip_300 .'</b></td>' : '' ?>
                    <?= ($count_ip_400!=0)? '<td><b>'. $count_ip_400 .'</b></td>' : '' ?>
                    <?= ($count_ip_500!=0)? '<td><b>'. $count_ip_500 .'</b></td>' : '' ?>
                    <?= ($count_ip_750!=0)? '<td><b>'. $count_ip_750 .'</b></td>' : '' ?>
                    <td><b><?= $total_all_ip; ?></b></td>
                </tr>
            </table>
            <br>
            <br>
            <table class="insured-table table">
                <tr>
                    <td rowspan="5" width="25%"><b>Tabel Premi Rawat Inap<b></td>
                    <td><b>Jenis Kelamin</td>
                    <?= ($count_ip_300!=0)? '<td><b>IP300<b></td>' : '' ?>
                    <?= ($count_ip_400!=0)? '<td><b>IP400<b></td>' : '' ?>
                    <?= ($count_ip_500!=0)? '<td><b>IP500<b></td>' : '' ?>
                    <?= ($count_ip_750!=0)? '<td><b>IP750<b></td>' : '' ?>
                </tr>
                <tr>
                    <td>LAKI-LAKI</td>
                     <?= ($count_ip_300!=0)? '<td class="background-aqua">1,619,000</td>' : '' ?>
                     <?= ($count_ip_400!=0)? '<td class="background-aqua">2,147,000</td>' : '' ?>
                     <?= ($count_ip_500!=0)? '<td class="background-aqua">2,676,000</td>' : '' ?>
                     <?= ($count_ip_750!=0)? '<td class="background-aqua">3,892,000</td>' : '' ?>
                </tr>
                <tr>
                    <td>PEREMPUAN</td>
                     <?= ($count_ip_300!=0)? '<td class="background-aqua">1,862,000</td>' : '' ?>
                     <?= ($count_ip_400!=0)? '<td class="background-aqua">2,470,000</td>' : '' ?>
                     <?= ($count_ip_500!=0)? '<td class="background-aqua">3,078,000</td>' : '' ?>
                     <?= ($count_ip_750!=0)? '<td class="background-aqua">4,476,000</td>' : '' ?>
                </tr>
                <tr>
                    <td>ANAK-ANAK</td>
                     <?= ($count_ip_300!=0)? '<td class="background-aqua">1,578,000</td>' : '' ?>
                     <?= ($count_ip_400!=0)? '<td class="background-aqua">2,094,000</td>' : '' ?>
                     <?= ($count_ip_500!=0)? '<td class="background-aqua">2,609,000</td>' : '' ?>
                     <?= ($count_ip_750!=0)? '<td class="background-aqua">3,795,000</td>' : '' ?>
                </tr>
            </table>
            <br>
            <br>
            <table class="insured-table table">
                <tr>
                    <td rowspan="4" width="25%"><b>Total Premi Rawat Inap<b></td>
                    <td><b>Jenis Kelamin</td>
                    <?= ($count_ip_300!=0)? '<td><b>IP300<b></td>' : '' ?>
                    <?= ($count_ip_400!=0)? '<td><b>IP400<b></td>' : '' ?>
                    <?= ($count_ip_500!=0)? '<td><b>IP500<b></td>' : '' ?>
                    <?= ($count_ip_750!=0)? '<td><b>IP750<b></td>' : '' ?>
                    <td><b>Total<b></td>
                </tr>
                <?php 
                    $male_ip_300_price = ($male_ip_300 * 1619000);
                    $male_ip_400_price = ($male_ip_400 * 2147000);
                    $male_ip_500_price = ($male_ip_500 * 2676000);
                    $male_ip_750_price = ($male_ip_750 * 3892000);
                    $total_male_ip_price = $male_ip_300_price + $male_ip_400_price + $male_ip_500_price + $male_ip_750_price;

                    $female_ip_300_price = ($female_ip_300 * 1862000);
                    $female_ip_400_price = ($female_ip_400 * 2470000);
                    $female_ip_500_price = ($female_ip_500 * 3078000);
                    $female_ip_750_price = ($female_ip_750 * 4476000);
                    $total_female_ip_price = $female_ip_300_price + $female_ip_400_price + $female_ip_500_price + $female_ip_750_price;

                    $child_ip_300_price = ($child_ip_300 * 1862000);
                    $child_ip_400_price = ($child_ip_400 * 2470000);
                    $child_ip_500_price = ($child_ip_500 * 3078000);
                    $child_ip_750_price = ($child_ip_750 * 4476000);
                    $total_child_ip_price = $child_ip_300_price + $child_ip_400_price + $child_ip_500_price + $child_ip_750_price;

                    $count_ip_300_price = $male_ip_300_price + $female_ip_300_price + $child_ip_300_price;
                    $count_ip_400_price = $male_ip_400_price + $female_ip_400_price + $child_ip_400_price;
                    $count_ip_500_price = $male_ip_500_price + $female_ip_500_price + $child_ip_500_price;
                    $count_ip_750_price = $male_ip_750_price + $female_ip_750_price + $child_ip_750_price;
                    $jmlrowip=0;
                    if($count_ip_300==0){
                        $jmlrowip=$jmlrowip+1;
                    }
                    if($count_ip_400==0){
                        $jmlrowip=$jmlrowip+1;
                    }
                    if($count_ip_500==0){
                        $jmlrowip=$jmlrowip+1;
                    }
                    if($count_ip_750==0){
                        $jmlrowip=$jmlrowip+1;
                    }
                ?>
                <tr>
                    <td>LAKI-LAKI</td>
                     <?= ($count_ip_300!=0)? '<td>'.number_format($male_ip_300_price, 2, '.', ',').'</td>' : ''?>
                     <?= ($count_ip_400!=0)? '<td>'.number_format($male_ip_400_price, 2, '.', ',').'</td>' : ''?>
                     <?= ($count_ip_500!=0)? '<td>'.number_format($male_ip_500_price, 2, '.', ',').'</td>' : ''?>
                     <?= ($count_ip_750!=0)? '<td>'.number_format($male_ip_750_price, 2, '.', ',').'</td>' : ''?>
                     <td><?= number_format($total_male_ip_price, 2, '.', ',') ?></td>
                </tr>
                <tr>
                    <td>PEREMPUAN</td>
                     <?= ($count_ip_300!=0)? '<td>'.number_format($female_ip_300_price, 2, '.', ',').'</td>' : ''?>
                     <?= ($count_ip_400!=0)? '<td>'.number_format($female_ip_400_price, 2, '.', ',').'</td>' : ''?>
                     <?= ($count_ip_500!=0)? '<td>'.number_format($female_ip_500_price, 2, '.', ',').'</td>' : ''?>
                     <?= ($count_ip_750!=0)? '<td>'.number_format($female_ip_750_price, 2, '.', ',').'</td>' : ''?>
                     <td><?= number_format($total_female_ip_price, 2, '.', ',')?></td>
                </tr>
                <tr>
                    <td>ANAK-ANAK</td>
                     <?= ($count_ip_300!=0)? '<td>'.number_format($child_ip_300_price, 2, '.', ',').'</td>' : ''?>
                     <?= ($count_ip_400!=0)? '<td>'.number_format($child_ip_400_price, 2, '.', ',').'</td>' : ''?>
                     <?= ($count_ip_500!=0)? '<td>'.number_format($child_ip_500_price, 2, '.', ',').'</td>' : ''?>
                     <?= ($count_ip_750!=0)? '<td>'.number_format($child_ip_750_price, 2, '.', ',').'</td>' : ''?>
                     <td><?= number_format($total_child_ip_price, 2, '.', ',')?></td>
                </tr>
                <tr>
                    <td colspan="<?= $jmlrowip ?>" style="border:none"></td>
                     <td><b><?= number_format(($total_male_ip_price + $total_female_ip_price + $total_child_ip_price), 2, '.', ',') ?><b></td>
                </tr>
            </table>
        </div>
    </div>
</page>
<page style="page-break-before: always;">
    <div class="container">
        <div class="body-letter text16">
            <table class="insured-table table">
                <tr>
                    <td rowspan="5" width="25%"><b>Tabel Peserta</b></td>
                    <td>Jenis Kelamin</td>
                    <?= ($count_op_150!=0)? '<td><b>OP150</b></td>' : '' ?>
                    <?= ($count_op_200!=0)? '<td><b>OP200</b></td>' : '' ?>
                    <?= ($count_op_250!=0)? '<td><b>OP250</b></td>' : '' ?>
                    <?= ($count_op_350!=0)? '<td><b>OP350</b></td>' : '' ?>
                    <td>Total</td>
                </tr>
                <tr>
                    <td>LAKI-LAKI</td>
                     <?= ($count_op_150!=0)? '<td>'.$male_op_150.'</td>' : '' ?>
                     <?= ($count_op_200!=0)? '<td>'.$male_op_200.'</td>' : '' ?>
                     <?= ($count_op_250!=0)? '<td>'.$male_op_250.'</td>' : '' ?>
                     <?= ($count_op_350!=0)? '<td>'.$male_op_350.'</td>' : '' ?>
                    <td><?= $total_male_op?></td>
                </tr>
                <tr>
                    <td>PEREMPUAN</td>
                    <?= ($count_op_150!=0)? '<td>'.$female_op_150.'</td>' : '' ?>
                    <?= ($count_op_200!=0)? '<td>'.$female_op_200.'</td>' : '' ?>
                    <?= ($count_op_150!=0)? '<td>'.$female_op_250.'</td>' : '' ?>
                    <?= ($count_op_150!=0)? '<td>'.$female_op_350.'</td>' : '' ?>
                    <td><?= $total_female_op?></td>
                </tr>
                <tr>
                    <td>ANAK-ANAK</td>
                    <?= ($count_op_150!=0)? '<td>'.$child_op_150.' </td>' : '' ?>
                    <?= ($count_op_200!=0)? '<td>'.$child_op_200.' </td>' : '' ?>
                    <?= ($count_op_250!=0)? '<td>'.$child_op_250.' </td>' : '' ?>
                    <?= ($count_op_350!=0)? '<td>'.$child_op_350.' </td>' : '' ?>
                    <td><?= $total_child_op ?></td>
                </tr>
                <tr>
                    <td><b>Total</b></td>
                    <?= ($count_op_150!=0)? '<td><b>'. $count_op_150.'</b></td>' : '' ?>
                    <?= ($count_op_200!=0)? '<td><b>'. $count_op_200.'</b></td>' : '' ?>
                    <?= ($count_op_250!=0)? '<td><b>'. $count_op_250.'</b></td>' : '' ?>
                    <?= ($count_op_350!=0)? '<td><b>'. $count_op_350.'</b></td>' : '' ?>
                   <td><b><?=  $total_male_op + $total_female_op + $total_child_op; ?></td>
                </tr>
            </table>
            <br>
            <br>
            <table class="insured-table table">
                <tr>
                    <td rowspan="5" width="25%"><b>Tabel Premi Rawat Jalan</b></td>
                    <td>Jenis Kelamin</td>
                    <?= ($count_op_150!=0)? '<td><b>OP150</b></td>' : '' ?>
                    <?= ($count_op_200!=0)? '<td><b>OP200</b></td>' : '' ?>
                    <?= ($count_op_250!=0)? '<td><b>OP250</b></td>' : '' ?>
                    <?= ($count_op_350!=0)? '<td><b>OP350</b></td>' : '' ?>

                </tr>
                <tr>
                    <td>LAKI-LAKI</td>
                    <?= ($count_op_150!=0)? '<td class="background-aqua">1,289,000</td>' : '' ?>
                    <?= ($count_op_200!=0)? '<td class="background-aqua">1,409,000</td>' : '' ?>
                    <?= ($count_op_250!=0)? '<td class="background-aqua">1,478,000</td>' : '' ?>
                    <?= ($count_op_350!=0)? '<td class="background-aqua">1,616,000</td>' : '' ?>
                </tr>
                <tr>
                    <td>PEREMPUAN</td>
                    <?= ($count_op_150!=0)? '<td class="background-aqua">1,482,000</td>' : '' ?>
                    <?= ($count_op_200!=0)? '<td class="background-aqua">1,602,000</td>' : '' ?>
                    <?= ($count_op_250!=0)? '<td class="background-aqua">1,700,000</td>' : '' ?>
                    <?= ($count_op_350!=0)? '<td class="background-aqua">1,859,000</td>' : '' ?>
                </tr>
                <tr>
                    <td>ANAK-ANAK</td>
                    <?= ($count_op_150!=0)? '<td class="background-aqua">1,257,000</td>' : '' ?>
                    <?= ($count_op_200!=0)? '<td class="background-aqua">1,374,000</td>' : '' ?>
                    <?= ($count_op_250!=0)? '<td class="background-aqua">1,441,000</td>' : '' ?>
                    <?= ($count_op_350!=0)? '<td class="background-aqua">1,576,000</td>' : '' ?>
                </tr>

            </table>
            <br>
            <br>
            <?php
                $male_op_150_price = ($male_op_150 * 1289000);
                $male_op_200_price = ($male_op_200 * 1409000);
                $male_op_250_price = ($male_op_250 * 1478000);
                $male_op_350_price = ($male_op_350 * 1616000);
                $total_male_op_price = $male_op_150_price + $male_op_200_price + $male_op_250_price + $male_op_350_price;

                $female_op_150_price = ($female_op_150 * 1482000);
                $female_op_200_price = ($female_op_200 * 1602000);
                $female_op_250_price = ($female_op_250 * 1700000);
                $female_op_350_price = ($female_op_350 * 1859000);
                $total_female_op_price = $female_op_150_price + $female_op_200_price + $female_op_250_price + $female_op_350_price;

                $child_op_150_price = ($child_op_150 * 1257000);
                $child_op_200_price = ($child_op_200 * 1374000);
                $child_op_250_price = ($child_op_250 * 1441000);
                $child_op_350_price = ($child_op_350 * 1576000);
                $total_child_op_price = $child_op_150_price + $child_op_200_price + $child_op_250_price + $child_op_350_price;

                $count_op_150_price = $male_op_150_price + $female_op_150_price + $child_op_150_price;
                $count_op_200_price = $male_op_200_price + $female_op_200_price + $child_op_200_price;
                $count_op_250_price = $male_op_250_price + $female_op_250_price + $child_op_250_price;
                $count_op_350_price = $male_op_350_price + $female_op_350_price + $child_op_350_price;

            ?>
            <table class="insured-table table">
                <tr>
                    <td rowspan="4" width="25%"><b>Total Premi Rawat Jalan</b></td>
                    <td><b>Jenis Kelamin</b></td>
                    <?= ($count_op_150!=0)? '<td><b>OP150</b></td>' : '' ?>
                    <?= ($count_op_200!=0)? '<td><b>OP200</b></td>' : '' ?>
                    <?= ($count_op_250!=0)? '<td><b>OP250</b></td>' : '' ?>
                    <?= ($count_op_350!=0)? '<td><b>OP350</b></td>' : '' ?>
                    <td>Total</td>
                </tr>
                <tr>
                    <td>LAKI-LAKI</td>
                    <?= ($count_op_150!=0)? '<td>'.number_format($male_op_150_price, 2, '.', ',').'</td>': '' ?>
                    <?= ($count_op_200!=0)? '<td>'.number_format($male_op_200_price, 2, '.', ',').'</td>': '' ?>
                    <?= ($count_op_250!=0)? '<td>'.number_format($male_op_250_price, 2, '.', ',').'</td>': '' ?>
                    <?= ($count_op_350!=0)? '<td>'.number_format($male_op_350_price, 2, '.', ',').'</td>': '' ?>
                    <td> <?= number_format($total_male_op_price, 2, '.', ',') ?> </td>
                </tr>
                <tr>
                    <td>PEREMPUAN</td>
                    <?= ($count_op_150!=0)? '<td>'.number_format($female_op_150_price, 2, '.', ',').'</td>': '' ?>
                    <?= ($count_op_200!=0)? '<td>'.number_format($female_op_200_price, 2, '.', ',').'</td>': '' ?>
                    <?= ($count_op_250!=0)? '<td>'.number_format($female_op_250_price, 2, '.', ',').'</td>': '' ?>
                    <?= ($count_op_350!=0)? '<td>'.number_format($female_op_350_price, 2, '.', ',').'</td>': '' ?>
                    <td><?= number_format($total_female_op_price, 2, '.', ',') ?> </td>
                </tr>
                <tr>
                    <td>ANAK-ANAK</td>
                    <?= ($count_op_150!=0)? '<td>'.number_format($child_op_150_price, 2, '.', ',').'</td>': '' ?>
                    <?= ($count_op_200!=0)? '<td>'.number_format($child_op_200_price, 2, '.', ',').'</td>': '' ?>
                    <?= ($count_op_250!=0)? '<td>'.number_format($child_op_250_price, 2, '.', ',').'</td>': '' ?>
                    <?= ($count_op_350!=0)? '<td>'.number_format($child_op_350_price, 2, '.', ',').'</td>': '' ?>
                    <td> <?= number_format($total_child_op_price, 2, '.', ',') ?></td>
                </tr>
                <tr>
                    <td colspan="">Total</td>
                    
                    <td><b><?= number_format(($total_male_op_price + $total_female_op_price + $total_child_op_price), 2, '.', ','); ?><b></td>

                </tr>

            </table>
        </div>
    </div>
</page>
<page style="page-break-before: always;">
    <div class="container">
        <div class="body-letter text16">
            <table class="insured-table table">
                <tr>
                    <td rowspan="5" width="25%"><b>Tabel Peserta</b></td>
                    <td><b>Jenis Kelamin</td>
                    <?= ($count_d_3000!=0)? '<td><b>D3000</b></td>': ''?>
                    <?= ($count_d_4000!=0)? '<td><b>D4000</b></td>': ''?>
                    <?= ($count_d_5000!=0)? '<td><b>D5000</b></td>': ''?>
                    <?= ($count_d_6000!=0)? '<td><b>D6000</b></td>': ''?>
                    <td><b>Total</b></td>
                </tr>
                <tr>
                    <td>LAKI-LAKI</td>
                    <?= ($count_d_3000!=0)? '<td>'.$male_d_3000.'</td>' : ''?>
                    <?= ($count_d_4000!=0)? '<td>'.$male_d_4000.'</td>' : ''?>
                    <?= ($count_d_5000!=0)? '<td>'.$male_d_5000.'</td>' : ''?>
                    <?= ($count_d_6000!=0)? '<td>'.$male_d_6000.'</td>' : ''?>
                    <td><?= $total_male_d; ?></td>
                </tr>
                <tr>
                    <td>PEREMPUAN</td>
                    <?= ($count_d_3000!=0)? '<td>'.$female_d_3000.'</td>' : '' ?>
                    <?= ($count_d_4000!=0)? '<td>'.$female_d_4000.'</td>' : '' ?>
                    <?= ($count_d_5000!=0)? '<td>'.$female_d_5000.'</td>' : '' ?>
                    <?= ($count_d_6000!=0)? '<td>'.$female_d_6000.'</td>' : '' ?>
                    <td><?= $total_female_d; ?></td>
                </tr>
                <tr>
                    <td>ANAK-ANAK</td>
                    <?= ($count_d_3000!=0)? '<td>'.$child_d_3000.'</td>' : '' ?>
                    <?= ($count_d_4000!=0)? '<td>'.$child_d_4000.'</td>' : '' ?>
                    <?= ($count_d_5000!=0)? '<td>'.$child_d_5000.'</td>' : '' ?>
                    <?= ($count_d_6000!=0)? '<td>'.$child_d_6000.'</td>' : '' ?>
                    <td><?= $total_child_d; ?></td>
                </tr>
                <tr>
                    <td><b>Total</b></td>
                    <td><b><?= $count_d_3000; ?></b></td>
                    <td><b><?= $count_d_4000; ?></b></td>
                    <td><b><?= $count_d_5000; ?></b></td>
                    <td><b><?= $count_d_6000; ?></b></td>
                    <td><b><?= $total_male_d + $total_female_d + $total_count_d; ?></b></td>
                </tr>
            </table>
            <br>
            <br>
            <table class="insured-table table">
                <tr>
                    <td rowspan="5" width="25%"><b>Tabel Premi Gigi</b></td>
                    <td><b>Jenis Kelamin</b></td>
                    <?= ($count_d_3000!=0)? '<td><b>D3000</b></td>': ''?>
                    <?= ($count_d_4000!=0)? '<td><b>D4000</b></td>': ''?>
                    <?= ($count_d_5000!=0)? '<td><b>D5000</b></td>': ''?>
                    <?= ($count_d_6000!=0)? '<td><b>D6000</b></td>': ''?>

                </tr>
                <tr>
                    <td>LAKI-LAKI</td>
                    <?= ($count_d_3000!=0)? '<td class="background-aqua">701,000</td>':''?>
                    <?= ($count_d_4000!=0)? '<td class="background-aqua">935,000</td>':''?>
                    <?= ($count_d_5000!=0)? '<td class="background-aqua">1,169,000</td>':''?>
                    <?= ($count_d_6000!=0)? '<td class="background-aqua">1,402,000</td>':''?>
                </tr>
                <tr>
                    <td>PEREMPUAN</td>
                    <?= ($count_d_3000!=0)? '<td class="background-aqua">806,000</td>' : ''?>
                    <?= ($count_d_4000!=0)? '<td class="background-aqua">1,075,000</td>' : ''?>
                    <?= ($count_d_5000!=0)? '<td class="background-aqua">1,344,000</td>' : ''?>
                    <?= ($count_d_6000!=0)? '<td class="background-aqua">1,613,000</td>' : ''?>
                </tr>
                <tr>
                    <td>ANAK-ANAK</td>
                    <?= ($count_d_3000!=0)? '<td class="background-aqua">684,000</td>' : '' ?>
                    <?= ($count_d_4000!=0)? '<td class="background-aqua">912,000</td>' : '' ?>
                    <?= ($count_d_5000!=0)? '<td class="background-aqua">1,140,000</td>' : '' ?>
                    <?= ($count_d_6000!=0)? '<td class="background-aqua">1,367,000</td>' : '' ?>
                </tr>

            </table>
            <br>
            <br>
        </div>
        <?php
                $male_d_3000_price = ($male_d_3000 * 701000);
                $male_d_4000_price = ($male_d_4000 * 935000);
                $male_d_5000_price = ($male_d_5000 * 1169000);
                $male_d_6000_price = ($male_d_6000 * 1402000);
                $total_male_d_price = $male_d_3000_price + $male_d_4000_price + $male_d_5000_price + $male_d_6000_price;

                $female_d_3000_price = ($female_d_3000 * 806000);
                $female_d_4000_price = ($female_d_4000 * 1075000);
                $female_d_5000_price = ($female_d_5000 * 1344000);
                $female_d_6000_price = ($female_d_6000 * 1613000);
                $total_female_d_price = $female_d_3000_price + $female_d_4000_price + $female_d_5000_price + $female_d_6000_price;

                $child_d_3000_price = ($child_d_3000 * 684000);
                $child_d_4000_price = ($child_d_4000 * 912000);
                $child_d_5000_price = ($child_d_5000 * 1140000);
                $child_d_6000_price = ($child_d_6000 * 1367000);
                $total_child_d_price = $child_d_3000_price + $child_d_4000_price + $child_d_5000_price + $child_d_6000_price;

                $count_d_3000_price = $male_d_3000_price + $female_d_3000_price + $child_d_3000_price;
                $count_d_4000_price = $male_d_4000_price + $female_d_4000_price + $child_d_4000_price;
                $count_d_5000_price = $male_d_5000_price + $female_d_5000_price + $child_d_5000_price;
                $count_d_6000_price = $male_d_6000_price + $female_d_6000_price + $child_d_6000_price;

            ?>
        <div class="body-letter text16">
            <table class="insured-table table">
                <tr>
                    <td rowspan="4" width="25%"><b>Total Premi Gigi</b></td>
                    <td><b>Jenis Kelamin</b></td>
                    <?= ($count_d_3000!=0)? '<td><b>D3000</b></td>': ''?>
                    <?= ($count_d_4000!=0)? '<td><b>D4000</b></td>': ''?>
                    <?= ($count_d_5000!=0)? '<td><b>D5000</b></td>': ''?>
                    <?= ($count_d_6000!=0)? '<td><b>D6000</b></td>': ''?>
                    <td><b>Total</b></td>

                </tr>
                <tr>
                    <td>LAKI-LAKI</td>
                    <?= ($count_d_3000!=0)? '<td>'.number_format($male_d_3000_price, 2, '.', ',').'</td>' : '' ?>
                    <?= ($count_d_4000!=0)? '<td>'.number_format($male_d_4000_price, 2, '.', ',').'</td>' : '' ?>
                    <?= ($count_d_5000!=0)? '<td>'.number_format($male_d_5000_price, 2, '.', ',').'</td>' : '' ?>
                    <?= ($count_d_6000!=0)? '<td>'.number_format($male_d_6000_price, 2, '.', ',').'</td>' : '' ?>
                    <?= ($count_d_3000!=0)? '<td>'.number_format($total_male_d_price, 2, '.', ',').'</td>' : '' ?>
                </tr>
                <tr>
                    <td>PEREMPUAN</td>
                    <?= ($count_d_3000!=0)? '<td>'.number_format($female_d_3000_price, 2, '.', ',').'</td>' : '' ?>
                    <?= ($count_d_4000!=0)? '<td>'.number_format($female_d_4000_price, 2, '.', ',').'</td>' : '' ?>
                    <?= ($count_d_5000!=0)? '<td>'.number_format($female_d_5000_price, 2, '.', ',').'</td>' : '' ?>
                    <?= ($count_d_6000!=0)? '<td>'.number_format($female_d_6000_price, 2, '.', ',').'</td>' : '' ?>
                    <?= ($count_d_3000!=0)? '<td>'.number_format($total_female_d_price, 2, '.', ',').'></td>' : '' ?>
                </tr>
                <tr>
                    <td>ANAK-ANAK</td>
                    <?= ($count_d_3000!=0)? '<td>'.number_format($child_d_3000_price, 2, '.', ','). '</td>' : '' ?>
                    <?= ($count_d_4000!=0)? '<td>'.number_format($child_d_4000_price, 2, '.', ','). '</td>' : '' ?>
                    <?= ($count_d_5000!=0)? '<td>'.number_format($child_d_5000_price, 2, '.', ','). '</td>' : '' ?>
                    <?= ($count_d_6000!=0)? '<td>'.number_format($child_d_6000_price, 2, '.', ','). '</td>' : '' ?>
                    <?= ($count_d_3000!=0)? '<td>'.number_format($total_child_d_price, 2, '.', ',').'</td>' : '' ?>
                </tr>
                <tr>
                    <td colspan="">Total</td>
                   
                    <td><b><?= number_format(($total_male_d_price + $total_female_d_price + $total_child_d_price), 2, '.', ','); ?></b></td>
                </tr>

            </table>
            <br>
            <br>
        </div>
    </div>
</page>
<page style="page-break-before: always;">
    <div class="container">
        <div class="body-letter text16">
            <table class="insured-table table">
                <tr>
                    <td rowspan="3" width="25%"><b>Total Premi Persalinan</b></td>
                    <td></td>
                    <?= ($female_m_5000!=0)? '<td><b>M5000</b></td>' : '' ?>
                    <?= ($female_m_6000!=0)? '<td><b>M6000</b></td>' : '' ?>
                    <?= ($female_m_7000!=0)? '<td><b>M7000</b></td>' : '' ?>
                    <?= ($female_m_8000!=0)? '<td><b>M8000</b></td>' : '' ?>
                    <td><b>Total</b></td>
                </tr>
                <tr>
                    <td>Jumlah Peserta</td>
                    <?= ($female_m_5000!=0)? '<td>'. $female_m_5000.'</td>' : '' ?>
                    <?= ($female_m_6000!=0)? '<td>'. $female_m_6000.'</td>' : '' ?>
                    <?= ($female_m_7000!=0)? '<td>'. $female_m_8000.'</td>' : '' ?>
                    <?= ($female_m_8000!=0)? '<td>'. $female_m_8000.'</td>' : '' ?>
                    <td><?= $total_female_m; ?></td>
                </tr>
                <tr>
                    <td>Premi/Orang</td>
                    <?= ($female_m_5000!=0)? '<td class="background-aqua">2,344,000</td>' : '' ?>
                    <?= ($female_m_6000!=0)? '<td class="background-aqua">2,813,000</td>' : '' ?>
                    <?= ($female_m_7000!=0)? '<td class="background-aqua">3,281,000</td>' : '' ?>
                    <?= ($female_m_8000!=0)? '<td class="background-aqua">3,750,000</td>' : '' ?>
                    <td></td>
                </tr>
                <?php 
                    $female_m_5000_price = ($female_m_5000 * 2344000);
                    $female_m_6000_price = ($female_m_6000 * 2813000);
                    $female_m_7000_price = ($female_m_7000 * 3281000);
                    $female_m_8000_price = ($female_m_8000 * 3750000);
                    $total_female_m_price = $female_m_5000_price + $female_m_6000_price + $female_m_7000_price + $female_m_8000_price;
                ?>
                <tr>
                    <td colspan="">Total</td>
                    
                    <td><b><?= number_format($total_female_m_price, 2, '.', ','); ?></b></td>
                </tr>


            </table>
            <br>
            <br>
            <table class="insured-table table">
                <tr>
                    <td rowspan="3" width="25%"><b>Total Premi Optik</b></td>
                    <td></td>
                    <?= ($count_o_800!=0)? '<td><b>O800</b></td>' : '' ?>
                    <?= ($count_o_1000!=0)? '<td><b>O1000</b></td>' : '' ?>
                    <?= ($count_o_1200!=0)? '<td><b>O1200</b></td>' : '' ?>
                    <?= ($count_o_1400!=0)? '<td><b>O1400</b></td>' : '' ?>  
                    <td>Total</td>
                </tr>
                <tr>
                    <td>Jumlah Peserta</td>
                    <?= ($count_o_800!=0)?' <td>'. $count_o_800.'</td>' : '' ?>
                    <?= ($count_o_800!=0)?' <td>'. $count_o_1000.'</td>' : '' ?>
                    <?= ($count_o_800!=0)?' <td>'. $count_o_1200.'</td>' : '' ?>
                    <?= ($count_o_800!=0)?' <td>'. $count_o_1400.'</td>' : '' ?>
                    <td><?= $total_male_o + $total_female_o + $total_child_o; ?></td>
                </tr>
                <tr>
                    <td>Premi/Orang</td>
                    <?= ($count_o_800!=0)?' <td class="background-aqua">491,000</td>' :  '' ?>
                    <?= ($count_o_800!=0)?' <td class="background-aqua">614,000</td>' : '' ?>
                    <?= ($count_o_800!=0)?' <td class="background-aqua">737,000</td>' :  ''?>
                    <?= ($count_o_800!=0)?' <td class="background-aqua">860,000</td>' :  ''?>
                    <td></td>
                </tr>
                <?php 
                    $count_o_800_price = ($count_o_800 * 491000);
                    $count_o_1000_price = ($count_o_1000 * 614000);
                    $count_o_1200_price = ($count_o_1200 * 737000);
                    $count_o_1400_price = ($count_o_1400 * 860000);
                    $total_all_o_price = $count_o_800_price + $count_o_1000_price + $count_o_1200_price + $count_o_1400_price;
                ?>
                <tr>
                    <td colspan="">Total</td>
                    
                    <td><b><?= number_format($total_all_o_price, 2, '.', ','); ?></b></td>
                </tr>
            </table>
        </div>

        <br>
        <br>
        
        <div class="row">
            <div class="col-md-5 col-xs-5 col-sm-5">
                <table class="insured-table table" border="1">
                    <tr>
                        <td>Total Premi</td>
                        <td>IDR <?= number_format(($total_premium - 50000), 0, '.', ',') ?></td>
                    </tr>
                    <tr>
                        <td>Biaya Polis</td>
                        <td>IDR <?= number_format(50000, 0, '.', ',');?></td>
                    </tr>
                    <tr>
                        <td>Grand Total</td>
                        <td>IDR <?= number_format($total_premium, 0, '.', ',') ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</page>
            <!-- <br>
            <br>
            <table class="insured-table table" style="width:25%!important">
                <tr>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                </tr>
            </table> --> 
<style>
    .insured-table table{
        margin-top:10px;
    }
    .insured-table table,
    .insured-table th,
    .insured-table td {
        border: 1px solid black !important;
        font-size: 12px;
        border-collapse: collapse;
    }

    .insured-table td {
        vertical-align: middle !important;
        text-align: center;
        padding: 5px;
    }
    .background-aqua{
        background-color:#6BCAE2;
    }
</style>