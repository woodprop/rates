<?php
/* @var string $date
 * @var float $usd_rate
 * @var float $eur_rate
 * @var bool $usd_trend
 * @var bool $eur_trend
 *
 */
?>
<h2>Курсы валют на <?= $date ?></h2>
<h3>USD: <?= $usd_rate ?> <?= $usd_trend ? '<i class="fa fa-arrow-up text-danger"></i>' : '<i class="fa fa-arrow-down text-success"></i>' ?></h3>
<h3>EUR: <?= $eur_rate ?> <?= $eur_trend ? '<i class="fa fa-arrow-up text-danger"></i>' : '<i class="fa fa-arrow-down text-success"></i>' ?></h3>