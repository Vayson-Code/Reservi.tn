<?php

include '../Controller/ReservationC.php';
$reservationC=new ReservationC();
$reservation= NULL;

//$list=$clientC->listClients();
if (
    isset($_POST["date_reservation"]) &&
    isset($_POST["tel"]) &&
    isset($_POST["nom_reservation"])
) {
  
    if (
        !empty($_POST["date_reservation"]) &&
        !empty($_POST["tel"]) &&
        !empty($_POST["nom_reservation"])
    ) {
        $i=$_POST["user_id"];
   
    	$reservation = new Reservation(
            null,
            $_POST['date_reservation'],
            $_POST['tel'],
            $_POST['id'],
            $i,
            $_POST['nom_reservation'],
            $_POST['req'],
            $_POST['num'],
        );
        $reservationC->addReservation($reservation);
        $reservationC->deltable($_POST['id'],$_POST['num']);
        header('Location:index.php');
    } else
        $error = "Missing information";
}
	?>
<!DOCTYPE html>
<!-- saved from url=(0175)https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="https://technext.github.io/restoran/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./Restoran - Bootstrap Restaurant Template_files/css2" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="./Restoran - Bootstrap Restaurant Template_files/all.min.css" rel="stylesheet">
    <link href="./Restoran - Bootstrap Restaurant Template_files/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./Restoran - Bootstrap Restaurant Template_files/animate.min.css" rel="stylesheet">
    <link href="./Restoran - Bootstrap Restaurant Template_files/owl.carousel.min.css" rel="stylesheet">
    <link href="./Restoran - Bootstrap Restaurant Template_files/tempusdominus-bootstrap-4.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./Restoran - Bootstrap Restaurant Template_files/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./Restoran - Bootstrap Restaurant Template_files/style.css" rel="stylesheet">
<style type="text/css">:root zeus-ad, :root topadblock, :root span[id^="ezoic-pub-ad-placeholder-"], :root guj-ad, :root div[jsdata*="CarouselPLA-"][data-id^="CarouselPLA-"], :root div[id^="yandex_ad"], :root div[id^="vuukle-ad-"], :root div[id^="rc-widget-"], :root div[id^="lazyad-"], :root div[id^="js-dfp-"], :root div[id^="gtm-ad-"], :root div[id^="gpt_ad_"], :root div[id^="gpt-ad-hor"], :root div[id^="div-gpt-"], :root div[id^="dfp-slot-"], :root div[id^="dfp-ad-"], :root div[id^="advads_"], :root div[id^="adspot-"], :root div[id^="ads300_250-widget-"], :root div[id^="ads300_100-widget-"], :root div[id^="ads250_250-widget-"], :root div[id^="adrotate_widgets-"], :root div[id^="adngin-"], :root div[id^="adfox_"], :root div[id^="ad_script_"], :root div[id^="ad-server-"], :root div[id^="ad-gpt-"], :root div[id^="ad-div-"], :root div[id*="ScriptRoot"], :root div[id*="MarketGid"], :root div[data-mpu1], :root div[data-insertion], :root div[data-id-advertdfpconf], :root div[data-google-query-id], :root hl-adsense, :root div[data-contentexchange-widget], :root div[data-content="Advertisement"], :root div[data-alias="300x250 Ad 2"], :root div[data-alias="300x250 Ad 1"], :root div[data-adzone], :root div[data-adunit-path], :root div[data-ad-wrapper], :root div[data-ad-targeting], :root div[data-ad-placeholder], :root div[class^="s-dfp-"], :root div[class^="native-ad-"], :root div[data-dfp-id], :root div[class^="kiwi-ad-wrapper"], :root div[class^="Adstyled__AdWrapper-"], :root div[aria-label="Ads"], :root display-ads, :root aside[id^="advads_ad_widget-"], :root aside[id^="adrotate_widgets-"], :root article.ad, :root div[class^="gpt-ad-hor"], :root ark-top-ad, :root app-advertisement, :root amp-embed[type="taboola"], :root amp-connatix-player, :root amp-ad-custom, :root ad-shield-ads, :root ad-desktop-sidebar, :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"], :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[href^="https://www.vfreecams.com/in/?track="], :root a[href^="https://www.rabbits.webcam/?id="], :root a[href^="https://www.purevpn.com/"][href*="&utm_source=aff-"], :root a[href^="https://www.privateinternetaccess.com/"] > img, :root a[href^="https://www.passeura.com/"], :root a[href^="https://www.oneclickroot.com/?tap_a="] > img, :root a[href^="https://www.oboom.com/ref/"], :root a[href^="https://www.nutaku.net/signup/landing/"], :root a[href^="https://www.nudeidols.com/cams/"], :root a[href^="https://www.mypornstarcams.com/landing/click/"], :root a[href^="https://www.mrskin.com/account/"], :root a[href^="https://www.kingsoffetish.com/tour?partner_id="], :root a[href^="https://www.jackery.com?aff="] > img, :root a[href^="https://www.iyalc.com/"], :root a[href^="https://www.infowarsstore.com/"] > img, :root a[href^="https://www.highperformancegate.com/"], :root a[href^="https://www.healthrangerstore.com/"] > img, :root a[href^="https://www.goldenfrog.com/vyprvpn?offer_id="][href*="&aff_id="], :root a[href^="https://www.get-express-vpn.com/offer/"], :root a[href^="https://www.financeads.net/tc.php?"], :root a[href^="https://www.clicktraceclick.com/"], :root a[href^="https://www.camsoda.com/enter.php?id="], :root a[href^="https://www.brazzersnetwork.com/landing/"], :root div[class^="Display_displayAd"], :root a[href^="https://www.sheetmusicplus.com/?aff_id="], :root a[href^="https://www.bang.com/?aff="], :root a[href^="https://www.arthrozene.com/"][href*="?tid="], :root a[href^="https://www.adsexse.com/x/"], :root a[href^="https://webroutetrk.com/"], :root iframe[src^="http://ad.yieldmanager.com/"], :root a[href^="https://wantopticalfreelance.com/"], :root a[href^="https://waisheph.com/"], :root a[href^="https://uncensored.game/"], :root a[href^="https://twinrdsyn.com/"], :root a[href^="https://ttf.trmobc.com/"], :root a[href^="https://trusted-click-host.com/"], :root a[href^="https://trk.watchlivesports4k.club/"], :root a[href^="https://trk.moviesflix4k.xyz/"], :root a[href^="https://trf.bannerator.com/"], :root a[href^="https://trappist-1d.com/"], :root a[href^="https://tragency-clesburg.icu/"], :root a[href^="https://traffdaq.com/"], :root a[href^="https://tracking.trackcasino.co/"], :root a[href^="https://tracking.comfortclick.eu/"], :root a[href^="https://tracking.avapartner.com/"], :root a[href^="https://track.ultravpn.com/"], :root a[href^="https://track.totalav.com/"], :root a[href^="https://track.themadtrcker.com/"], :root a[href^="https://track.interactivegf.com/"], :root a[href^="https://vlnk.me/"], :root a[href^="https://track.healthtrader.com/"], :root a[href^="https://track.effiliation.com/servlet/effi.click?"] > img, :root a[href^="https://track.clickmoi.xyz/"], :root a[href^="https://track.afcpatrk.com/"], :root a[href^="https://tupitea.co/"], :root a[href^="https://track.adform.net/"], :root a[href^="https://torguard.net/aff.php"] > img, :root a[href^="https://tm-offers.gamingadult.com/"], :root div[data-adname], :root a[href^="https://thechleads.pro/"], :root a[href^="https://tracking.gitads.io/"], :root a[href^="https://taghaugh.com/"], :root a[href^="https://t.mobtya.com/"], :root a[href^="https://t.hrtyj.com/"], :root a[href^="https://www.profitablecpmgate.com/"], :root a[href^="https://t.adating.link/"], :root a[href^="https://topoffers.com/"][href*="/?pid="], :root a[href^="https://syndication.dynsrvtbg.com/"], :root a[href^="https://streamate.com/landing/click/"], :root a[href^="https://s.zlink2.com/"], :root a[href^="https://reachtrgt.com/"], :root a[href^="https://queersodadults.com/"], :root a[href^="https://promo-bc.com/"], :root a[href^="https://prf.hn/click/"][href*="/camref:"] > img, :root a[href^="https://serve.awmdelivery.com/"], :root a[href^="https://prf.hn/click/"][href*="/adref:"] > img, :root a[href^="https://pongidsrunback.com/"], :root a[href^="https://pcm.bannerator.com/"], :root iframe[id^="google_ads_frame"], :root a[href^="https://pb-track.com/"], :root a[href^="https://partners.fxoro.com/click.php?"], :root a[href^="https://paid.outbrain.com/network/redir?"], :root a[href^="https://torrentsafeguard.com/?aid="], :root a[href^="https://offers.refchamp.com/"], :root a[href^="https://oackoubs.com/"], :root a[href^="https://ndt5.net/"], :root a[href^="https://natour.naughtyamerica.com/track/"], :root a[href^="https://cam4com.go2cloud.org/"], :root a[href^="https://my-movie.club/"], :root a[href^="https://iqbroker.com/"][href*="?aff="], :root a[href^="https://movie.download-file.org/"], :root div[id^="ezoic-pub-ad-"], :root a[href^="https://mk-cdn.net/"], :root .trc_rbox_div .syndicatedItemUB, :root [href^="https://zone.gotrackier.com/"], :root a[href^="https://meet-to-fuck.com/"], :root [href^="https://www.herbanomic.com/"] > img, :root a[href^="https://maymooth-stopic.com/"], :root div[id^="google_dfp_"], :root a[href^="http://googleads.g.doubleclick.net/pcs/click"], :root a[href^="https://look.utndln.com/"], :root a[href^="https://a.bestcontentweb.top/"], :root a[href^="https://lobimax.com/"], :root a[href^="https://lead1.pl/"], :root a[href^="https://refpazkjixes.top/"], :root a[href^="https://landing.brazzersplus.com/"], :root a[href^="https://landing.brazzersnetwork.com/"], :root a[href^="https://ads.leovegas.com/redirect.aspx?"], :root a[href^="https://land.brazzersnetwork.com/landing/"], :root a[href^="https://juicyads.in/"], :root a[href^="https://itubego.com/video-downloader/?affid="], :root a[href^="https://incisivetrk.cvtr.io/click?"], :root a[href^="https://iactrivago.ampxdirect.com/"], :root a[href^="https://iac.ampxdirect.com/"], :root a[href^="https://go.zybrdr.com"], :root [href^="http://join.michelle-austin.com/"], :root a[href^="https://go.xxxiijmp.com"], :root a[href*=".zlinkm.com/"], :root a[href^="https://go.xtbaffiliates.com/"], :root a[href^="https://thaudray.com/"], :root [data-role="tile-ads-module"], :root a[href^="https://adsrv4k.com/"], :root a[href^="https://go.xlviirdr.com"], :root .card-captioned.crd > .crd--cnt > .s2nPlayer, :root [data-css-class="dfp-inarticle"], :root a[href^="https://go.tmrjmp.com"], :root a[href^="https://go.strpjmp.com/"], :root a[href^="https://go.skinstrip.net"][href*="?campaignId="], :root a[href^="https://go.markets.com/visit/?bta="], :root a[href^="//lambingsyddir.com/"], :root a[href^="https://billing.purevpn.com/aff.php"] > img, :root a[href^="https://go.hpyrdr.com/"], :root a[href^="https://go.goaserv.com/"], :root a[href^="https://go.ebrokerserve.com/"], :root a[href^="https://ismlks.com/"], :root [href^="https://www.mypillow.com/"] > img, :root a[href^="https://azpresearch.club/"], :root a[href^="https://go.xlirdr.com"], :root a[href^="https://track.afftck.com/"], :root a[href^="https://gohere.pl/"], :root a[href^="https://go.cmrdr.com/"], :root a[href^="https://www.bebi.com"], :root a[href^="https://loboclick.com"], :root iframe[src^="https://pagead2.googlesyndication.com/"], :root a[href^="http://www.onwebcam.com/random?t_link="], :root a[href^="https://get2nesoft1.ru/"], :root [href^="https://kingered-banctours.com/"], :root a[href^="https://get.surfshark.net/aff_c?"][href*="&aff_id="] > img, :root a[href^="https://affiliate.rusvpn.com/click.php?"], :root a[href^="https://geniusdexchange.com/"], :root a[href^="https://aj1070.online/"], :root a[href^="https://frameworkdeserve.com/"], :root a[href^="https://www.mrskin.com/tour"], :root a[href^="https://financeads.net/tc.php?"], :root bottomadblock, :root a[href^="https://fertilitycommand.com/"], :root a[href^="https://bluedelivery.pro/"], :root a[href^="https://fast-redirecting.com/"], :root a[href^="https://fakelay.com/"], :root a[href^="https://medleyads.com/"], :root div[data-native-ad], :root AD-SLOT, :root a[href^="https://engine.trackingdesks.com/"], :root a[href^="https://engine.blueistheneworanges.com/"], :root a[href^="https://tc.tradetracker.net/"] > img, :root a[href^="https://dianches-inchor.com/"], :root a[href^="https://go.admjmp.com/"], :root amp-fx-flying-carpet, :root a[href^="https://dfsdkkka.com/"], :root .ob_dual_right > .ob_ads_header ~ .odb_div, :root a[href^="https://deliver.tf2www.com/"], :root [href^="https://www.targetingpartner.com/"], :root [href^="https://detachedbates.com/"], :root a[href^="https://deliver.ptgncdn.com/"], :root a[href^="https://datingbests.life/"], :root #kt_player > a[target="_blank"], :root a[href^="https://cpartner.bdswiss.com/"], :root a[href^="https://clixtrac.com/"], :root AD-TRIPLE-BOX, :root a[href^="https://click.hoolig.app/"], :root img[src^="https://images.purevpnaffiliates.com"], :root a[href^="https://porntubemate.com/"], :root a[href^="http://www.gfrevenge.com/landing/"], :root a[href^="https://clickadilla.com/"], :root a[href^="https://click.dtiserv2.com/"], :root a[href^="https://go.xlvirdr.com"], :root a[href^="https://claring-loccelkin.com/"], :root a[href^="https://chaturbate.com/in/?track="], :root a[href^="https://chaturbate.com/in/?tour="], :root a[href^="https://aaucwbe.com/"], :root a[href^="https://cams.imagetwist.com/in/?track="], :root a[href^="https://mob1ledev1ces.com/"], :root a[href^="https://explore.findanswersnow.net/"], :root a[href^="https://camfapr.com/landing/click/"], :root a[href^="https://affcpatrk.com/"], :root a[href^="https://bongacams2.com/track?"], :root a[href^="https://www.sheetmusicplus.com/"][href*="?aff_id="], :root a[href^="https://bngpt.com/"], :root #topstuff > #tads, :root a[href^="https://black77854.com/"], :root a[href^="https://burpee.xyz/"], :root a[href*=".flndmyiove.net/"], :root [href^="http://join.trannies-fuck.com/"], :root [href^="http://www.fleshlightgirls.com/"], :root a[href^="https://bestdatinghere.life/"], :root a[target="_blank"][onmousedown="this.href^='http://paid.outbrain.com/network/redir?"], :root a[href^="https://banners.livepartners.com/"], :root a[href^="https://m.do.co/c/"] > img, :root div[id^="sticky_ad_"], :root a[href^="https://avtub.click/assets/link.php"], :root a[href^="https://go.gldrdr.com/"], :root [href^="https://www.cloudways.com/en/?id"], :root a[href^="https://as.sexad.net/"], :root a[href^="https://bestcond1tions.com/"], :root a[href^="https://takeallsoft.ru/"], :root a[href^="https://as.conjectwatson.com/"], :root [href="https://masstortfinancing.com"] img, :root a[href^="https://bongacams10.com/track?"], :root [data-ez-name], :root a[href^="https://awecrptjmp.com/"], :root a[href^="https://someperceptionparade.com/"], :root a[href^="https://galaxyroms.net/?scr="], :root a[href^="https://albionsoftwares.com/"], :root display-ad-component, :root a[href^="https://ak.hetaruwg.com/"], :root a[href^="https://go.etoro.com/"] > img, :root a[href^="https://go.alxbgo.com/"], :root a[href^="https://aff-ads.stickywilds.com/"], :root a[href^="https://t.hrtye.com/"], :root a[href^="https://ads.cdn.live/"], :root a[href^="https://join.sexworld3d.com/track/"], :root a[href^="https://intenseaffiliates.com/redirect/"], :root a[href^="https://aweptjmp.com/"], :root a[href^="https://ads.ad4game.com/"], :root a[href^="https://affpa.top/"], :root a[href^="https://adnetwrk.com/"], :root a[href^="https://adjoincomprise.com/"], :root a[href^="https://t.grtyi.com/"], :root a[href^="https://myusenet.xyz/"], :root [href^="http://misslinkvocation.com/"], :root a[href^="https://adclick.g.doubleclick.net/"], :root a[href^="https://www.bet365.com/"][href*="affiliate="], :root [href^="https://r.kraken.com/"], :root a[href^="https://mmwebhandler.aff-online.com/"], :root a[href^="http://secure.vivid.com/track/"], :root a[href^="https://go.nordvpn.net/aff"] > img, :root a[href^="https://misspkl.com/"], :root [href^="http://clicks.totemcash.com/"], :root a[href^="https://ad.zanox.com/ppc/"] > img, :root a[href^="https://msecure117.com/"], :root a[href^="https://ad.kubiccomps.icu/"], :root a[href^="https://adswick.com/"], :root a[href^="https://static.fleshlight.com/images/banners/"], :root a[href^="https://ad.doubleclick.net/"], :root a[href^="https://ad.atdmt.com/"], :root a[href^="https://meet-sex-here.com/"], :root [data-m-ad-id], :root a[href^="https://a-ads.com/"], :root a[href^="http://www.mrskin.com/tour"], :root a[href^="https://k2s.cc/pr/"], :root a[data-url^="http://paid.outbrain.com/network/redir?"], :root a[href^="http://www.coiwqe.site/"], :root iframe[src^="http://www.adpeepshosted.com/"], :root a[href^="https://prf.hn/click/"][href*="/creativeref:"] > img, :root a[href^="http://www.adultempire.com/unlimited/promo?"][href*="&partner_id="], :root a[href^="https://ads-for-free.com/click.php?"], :root a[href^="http://www.FriendlyDuck.com/"], :root a[href^="http://traffic.tc-clicks.com/"], :root a[href^="http://tc.tradetracker.net/"] > img, :root .trc_rbox .syndicatedItem, :root a[href^="https://1free33style.com/"], :root a[href^="http://rs-stripe.wsj.com/stripe/redirect"], :root a[href^="http://tour.mrskin.com/"], :root a[href^="http://pubads.g.doubleclick.net/"], :root [onclick*="content.ad/"], :root a[href^="http://pityhostngco2.xyz/"], :root a[href^="http://partners.etoro.com/"], :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > div > .vci, :root a[href^="http://paid.outbrain.com/network/redir?"], :root a[data-redirect^="https://paid.outbrain.com/network/redir?"], :root [href^="https://www.reimageplus.com/"], :root a[href^="https://engine.phn.doublepimp.com/"], :root a[href^="http://intent.bingads.com/"], :root a[href^="https://cagothie.net/"], :root a[href^="https://watchmygirlfriend.tv/"], :root a[href^="http://go.xtbaffiliates.com/"], :root a[href^="http://www.advcashpro.com/aff/"], :root a[href^="http://deloplen.com/"], :root a[href^="http://d2.zedo.com/"], :root .rc-cta[data-target], :root [href^="http://go.cm-trk2.com/"], :root a[href^="http://click.payserve.com/"], :root a[href^="https://bs.serving-sys.com"], :root [class^="chp_ads_block"], :root a[href^="http://betahit.click/"], :root a[href^="https://clicks.pipaffiliates.com/"], :root [href^="https://noqreport.com/"] > img, :root a[href^="//wagerprocuratorantiterrorist.com/"], :root a[href^="http://adserver.adreactor.com/"], :root [href^="https://cipledecline.buzz/"], :root a[href^="https://earandmarketing.com/"], :root a[href^="http://adf.ly/?id="], :root [href^="http://homemoviestube.com/"], :root a[href^="http://ad.doubleclick.net/"], :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > .vci, :root a[href^="//syndication.dynsrvtbg.com/"], :root a[href^="//pubads.g.doubleclick.net/"], :root [class^="s2nPlayer"], :root a[href^="https://chaturbate.jjgirls.com/?track="], :root a[href^="https://ausoafab.net/"], :root a[href^="//benoopto.com/"], :root a[href^="https://dooloust.net/"], :root [href^="https://www.mypatriotsupply.com/"] > img, :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"], :root [href^="https://secure.bmtmicro.com/servlets/"], :root a[href="//rufflycouncil.com/"], :root a[href*="https://www.sweetdeals.com/"] img, :root div[data-native_ad], :root a[href*=".zlink9.com/"], :root [data-d-ad-id], :root a[href*=".engine.adglare.net/"], :root a[href^="https://a.bestcontentoperation.top/"], :root a[href^="//go.xlviiirdr.com"], :root [data-dynamic-ads], :root a[data-widget-outbrain-redirect^="http://paid.outbrain.com/network/redir?"], :root [data-ad-width], :root [href^="https://join.playboyplus.com/track/"], :root a[data-url^="http://paid.outbrain.com/network/redir?"] + .author, :root a[href^="https://axdsz.pro/"], :root a[href^="http://bodelen.com/"], :root a[data-oburl^="https://paid.outbrain.com/network/redir?"], :root a[href^="https://ptapjmp.com/"], :root DFP-AD, :root a[href^="http://allaptair.club/"], :root a[href^="//go.eabids.com/"], :root a[data-oburl^="http://paid.outbrain.com/network/redir?"], :root [href^="https://cpa.10kfreesilver.com/"], :root a[href^="https://a.bestcontentfood.top/"], :root a[href^="https://reinstandpointdumbest.com/"], :root a[href*="http://MyPillow.com"] > img, :root a[data-obtrack^="http://paid.outbrain.com/network/redir?"], :root a[href^="http://wct.link/"], :root [href^="https://goldforyourfuture.com/clk.trk"] img, :root [href^="https://infinitytrk.com/"], :root [onclick^="location.href='http://www.reimageplus.com"], :root a[href^="https://pl.premium4kflix.website/"], :root [id^="chp_ads_block"], :root a[href^="https://go.julrdr.com/"], :root a[href^="//chrif8kdstie.com/"], :root [id^="section-ad-banner"], :root .commercial-unit-mobile-top > div[data-pla="1"], :root a[href^="https://www.sweetdeals.com"], :root a[href^="https://track.bruceads.com/"], :root a[href^="https://t.aslnk.link/"], :root [href^="https://zstacklife.com/"] img, :root [href^="https://www.restoro.com/"], :root [data-ad-manager-id], :root a[href^="https://fleshlight.sjv.io/"], :root div[id^="zergnet-widget"], :root [href^="https://www.mystore.com/"] > img, :root div[id^="ad-position-"], :root a[href^="http://adultfriendfinder.com/go/page/landing"], :root a[href^="http://affiliate.glbtracker.com/"], :root a[href^="https://leg.xyz/?track="], :root a[href^="http://bc.vc/?r="], :root [href^="https://www.brighteonstore.com/products/"] img, :root a[href^="https://syndication.exoclick.com/"], :root [href^="https://track.fiverr.com/visit/"] > img, :root a[href^="https://go.trackitalltheway.com/"], :root a[href^="https://go.cmtaffiliates.com/"], :root [data-name="adaptiveConstructorAd"], :root [href^="https://optimizedelite.com/"] > img, :root a[href^="https://www.awin1.com/cread.php?awinaffid="], :root a[href^="//thaudray.com/"], :root a[href*=".trust.zone"], :root a[href^="http://trk.mdrtrck.com/"], :root [href^="https://shrugartisticelder.com"], :root div[id^="crt-"][style], :root a[href^="https://s.zlink1.com/"], :root a[href^="http://adultgames.xxx/"], :root a[href^="https://traffic.bannerator.com/"], :root [href^="https://shiftnetwork.infusionsoft.com/go/"] > img, :root a[href^="https://vo2.qrlsx.com/"], :root [href^="https://www.avantlink.com/click.php"] img, :root a[href^="https://losingoldfry.com/"], :root div[id^="ad-inserter-"], :root .scroll-fixable.rail-right > .deals-rail, :root a[href^="https://see.kmisln.com/"], :root [href^="https://routewebtk.com/"], :root a[href^="https://awptjmp.com/"], :root a[href^="https://go.goasrv.com/"], :root .commercial-unit-mobile-top > .v7hl4d, :root a[href^="https://mediaserver.entainpartners.com/renderBanner.do?"], :root [href^="https://stvkr.com/"], :root a[href^="https://tour.mrskin.com/"], :root a[href^="https://fastestvpn.com/lifetime-special-deal?a_aid="], :root ADS-RIGHT, :root [href^="https://mystore.com/"] > img, :root a[href^="https://moneynow.one/"], :root [href^="https://mypatriotsupply.com/"] > img, :root [href^="https://mylead.global/stl/"] > img, :root .vid-present > .van_vid_carousel__padding, :root a[href^="https://syndication.optimizesrv.com/"], :root [id^="google_ads_iframe"], :root app-ad, :root a[href^="https://go.xxxijmp.com"], :root [href^="https://istlnkcl.com/"], :root a[href^="https://playuhd.host/"], :root a[href^="https://5hjdbfjfd5.monster/"], :root [href^="https://www.hostg.xyz/"] > img, :root .section-subheader > .section-hotel-prices-header, :root [href^="http://join.ts-dominopresley.com/"], :root [href^="https://go.affiliatexe.com/"], :root a[href^="https://meet-sexhere.com/"], :root [href^="https://go.4rabettraff.com/"], :root [href^="https://glersakr.com/"], :root a[href^="https://click.a-ads.com/"], :root a[href^="https://wittered-mainging.com/"], :root [href^="https://engine.gettopple.com/"], :root [href^="https://awbbjmp.com/"], :root a[href^="https://gghf.mobi/"], :root [href^="https://affect3dnetwork.com/track/"], :root a[href^="https://go.currency.com/"], :root [href^="http://www.mypillow.com/"] > img, :root a[href^="//coarsewary.com/"], :root a[href^="https://a.montangop.top/"], :root [href^="https://v.investologic.co.uk/"], :root a[href^="https://dialling-abutory.com/"], :root div[id^="div-ads-"], :root [href^="https://rapidgator.net/article/premium/ref/"], :root a[href^="https://www.sugarinstant.com/?partner_id="], :root a[href^="https://adultfriendfinder.com/go/page/landing"], :root div[id^="advads-"], :root div[data-role="sidebarAd"], :root [href^="https://join3.bannedsextapes.com"], :root div[data-spotim-slot], :root [href^="https://antiagingbed.com/discount/"] > img, :root a[href^="https://go.247traffic.com/"], :root [href^="https://join.girlsoutwest.com/"], :root [href^="http://trafficare.net/"], :root a[href^="https://adserver.adreactor.com/"], :root [href^="http://join.shemalesfromhell.com/"], :root [id^="ad_slider"], :root [href^="https://clk.right-wing-health.com/"], :root a[href^="http://www.adultdvdempire.com/?partner_id="][href*="&utm_"], :root [href^="http://join.shemale.xxx/"], :root [href^="https://ilovemyfreedoms.com/landing-"], :root a[href^="https://ads.betfair.com/redirect.aspx?"], :root a[href^="http://cam4com.go2cloud.org/aff_c?"], :root a[href^="https://www.chngtrack.com/"], :root a[href^="https://cpmspace.com/"], :root [href^="https://freecourseweb.com/"] > .sitefriend, :root a[href^="https://ads.planetwin365affiliate.com/redirect.aspx?"], :root [href^="http://join.rodneymoore.com/"], :root a[href^="https://uncensored3d.com/"], :root a[href^="https://creacdn.top-convert.com/"], :root [href^="https://go.xlrdr.com"], :root [id^="div-gpt-ad"], :root .ob_container .item-container-obpd, :root gpt-ad, :root [href^="http://www.pingperfect.com/aff.php"], :root a[href^="https://scurewall.co/"], :root [name^="google_ads_iframe"], :root a[href^="https://landing1.brazzersnetwork.com"], :root #slashboxes > .deals-rail, :root [href^="http://globsads.com/"], :root [href^="http://mypillow.com/"] > img, :root [href^="//ngeoziadiyc4hi2e.com/"], :root a[href^="https://go.xxxjmp.com"], :root a[href^="https://transfer.xe.com/signup/track/redirect?"], :root #leader-companion > a[href], :root [data-desktop-ad-id], :root [href^="https://wct.link/"], :root [href^="https://traffserve.com/"], :root a[href^="https://1startfiledownload1.com/"], :root a[href^="https://a.adtng.com/"], :root a[href^="http://static.fleshlight.com/images/banners/"], :root [href="https://ourgoldguy.com/contact/"] img, :root [href="https://www.masstortfinancing.com/"] > img, :root a[href^="https://lnkxt.bannerator.com/"], :root div[id^="ad_position_"], :root a[href^="https://ovb.im/"], :root a[href^="http://hotcandyland.com/partner/"], :root [href="https://jdrucker.com/gold"] > img, :root [href^="https://goldcometals.com/clk.trk"], :root [data-mobile-ad-id], :root a[href^="http://affiliates.thrixxx.com/"], :root #searchResultsList > div > div[onclick$="'inline.ad'});"], :root a[href^="https://www.adultempire.com/"][href*="?partner_id="], :root [data-template-type="nativead"], :root a[data-redirect^="this.href='http://paid.outbrain.com/network/redir?"], :root a[href^="https://go.xlivrdr.com"], :root a[href^="https://www.onlineusershielder.com/torrent-guard/?"], :root [data-freestar-ad], :root [data-ad-cls], :root [id^="ad-wrap-"], :root div[id^="taboola-stream-"], :root [href^="https://go.astutelinks.com/"], :root [href^="http://join.hardcoreshemalevideo.com/"], :root a[href^="http://ads2.williamhill.com/redirect.aspx?"], :root a[href^="https://porngames.adult/?SID="], :root a[href^="http://go.247traffic.com/"], :root [href^="http://residenceseeingstanding.com/"], :root a[href^="https://www.adskeeper.com"], :root a[href^="//agacelebir.com/"], :root [href^="https://totlnkcl.com/"], :root div[data-adunit], :root app-large-ad, :root [href^="https://turtlebids.irauctions.com/"] img, :root a[href^="http://www.onclickmega.com/jump/next.php?"], :root .trc_rbox_border_elm .syndicatedItem, :root [class^="amp-ad-"], :root div[id^="_vdo_ads_player_ai_"], :root a[href^="http://enter.anabolic.com/track/"], :root .trc_related_container div[data-item-syndicated="true"], :root a[href^="https://delivery.porn.com/"], :root [href^="https://click2cvs.com/"], :root a[href^="https://a2.adform.net/"], :root a[data-redirect^="http://paid.outbrain.com/network/redir?"], :root [data-revive-zoneid], :root a[href^="https://googleads.g.doubleclick.net/pcs/click"], :root AMP-AD, :root [href^="https://mypillow.com/"] > img, :root [href^="https://ad.admitad.com/"], :root .trc_rbox_div .syndicatedItem, :root a-ad, :root a[href^="http://go.fpmarkets.com/"], :root [data-ad-module], :root .grid > .container > #aside-promotion, :root [href^="https://trackfin.asia/"], :root .plistaList > .plista_widget_underArticle_item[data-type="pet"], :root a[href^="https://spygasm.com/track?"], :root a[href^="https://agacelebir.com/"], :root a[href*="//lkstrck2.com/"], :root .plistaList > .itemLinkPET, :root [href^="http://join.shemalepornstar.com/"], :root [data-advadstrackid], :root [href^="https://affiliate.fastcomet.com/"] > img, :root #atvcap + #tvcap > .mnr-c > .commercial-unit-mobile-top, :root a[href^="https://www.googleadservices.com/pagead/aclk?"], :root a[href^="https://awentw.com/"], :root [class^="div-gpt-ad"], :root a[href^="//voyeurhit.com/cs/"], :root a[href^="https://track.wg-aff.com"], :root a[href^="https://nutrientassumptionclaims.com/"], :root div[id^="ad_bnr_"], :root a[href^="https://join.virtuallust3d.com/"], :root a[href^="https://speedsupermarketdonut.com/"], :root #taw > .med + div > #tvcap > .mnr-c:not(.qs-ic) > .commercial-unit-mobile-top, :root [data-adblockkey], :root div.fadeInDown[id$="____equal"][class$="____equal"], :root a[href^="https://mediaserver.gvcaffiliates.com/renderBanner.do?"], :root a[href^="https://join.dreamsexworld.com/"], :root a[href^="https://odnxe.lncredlbiedate.com/"], :root a[href^="https://click.linksynergy.com/fs-bin/"], :root a[href^="https://join.virtualtaboo.com/track/"], :root a[href^="http://https://www.get-express-vpn.com/offer/"], :root [id^="ad_sky"], :root a[href^="https://americafirstpolls.com/"] { display: none !important; }</style></head>
<style>
    /* Set the size of the div element that contains the map */
#map {
  height: 400px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}
    </style>
<body>
<div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="menu.html" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.html" class="dropdown-item">Booking</a>
                                <a href="team.php" class="dropdown-item">team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <?php
                  $user_id =$_POST['user_id'];
                  
    if (isset($user_id))
{
    
    ?>
    <a href="profil.php" class="btn btn-primary py-2 px-4">Profile</a>  
    <?php
    }
    else
    {
        ?>
<a href="login.php" class="btn btn-primary py-2 px-4">Connexion</a>
<?php
}
?>
                </div>
            </nav>

        </div>
        <!-- Navbar & Hero End -->



    <div data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
<center><div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1000&amp;height=500&amp;hl=en&amp;q=<?php
    $ReservationC=new ReservationC();           
 $idr=$_POST['id'];
$wow=$ReservationC->geoR($idr);
 //var_dump($wow);
echo($wow[0]['geo']);?>&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/">format json</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:500px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:500px;}.gmap_iframe {height:500px!important;}</style></div></center>
       </div>
       <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src=<?php
    $ReservationC=new ReservationC();           
 $idr=$_POST['id'];
$wow=$ReservationC->vidR($idr);
 //var_dump($wow);
echo($wow[0]['vid']);?> data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form method="POST" action="" id="f">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nom_reservation" id="nom_reservation" placeholder="Your Name">
                                        <label for="nom_reservation">Your Name</label>
                                        <span id="error0"></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" name="tel" id="tel" placeholder="tel number">
                                        <label for="tel">tel</label>
                                        <span id="error1"></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control" name="date_reservation" id="date_reservation" placeholder="Date">
                                        <label for="date_reservation">Date Time</label>
                                        <span id="error2"></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="num" name="num">
                                        <?php
                         $ReservationC=new ReservationC();           
                    $idr=$_POST['id'];
                    $wow=$ReservationC->tableR($idr);
                        if($wow[0]['numtable']>=5)
                        {
                        ?>
                                          <option value="1">People 1</option>
                                          <option value="2">People 2</option>
                                          <option value="3">People 3</option>
                                          <option value="4">People 4</option>
                                          <option value="5">People 5</option>

     <?php
          }else
          if($wow[0]['numtable']==0)
          {
            ?>
            <option value="impo">Pas de table a reserver</option>
            <?php 
            }
            else
          {
            for ($i=1;$i<=$wow[0]['numtable'];$i++) 
            {
            
        ?>
<option value=<?php echo $i; ?>>People <?php echo $i; ?></option>


<?php
    }
}
    ?>
                                        </select>
                                        <label for="num">No Of People</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="req" name="req" style="height: 100px"></textarea>
                                        <label for="req">Special Request</label>
                                        <input name="id" type="hidden" value=<?PHP echo $_POST['id']; ?> >
                                        <input name="user_id" type="hidden" value=<?PHP echo $user_id; ?> >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            
                            <iframe class="embed-responsive-item" src=".\imgrestau\SnapSave.io-【MAD】ターニングポイント4【無職転生】ネタバレ注意.mp4" id="video" allowfullscreen=""></iframe>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Master Chefs</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="./Restoran - Bootstrap Restaurant Template_files/team-1.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="./Restoran - Bootstrap Restaurant Template_files/team-2.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="./Restoran - Bootstrap Restaurant Template_files/team-3.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="./Restoran - Bootstrap Restaurant Template_files/team-4.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel owl-loaded owl-drag">
                    
                    
                    
                    
                <div class="owl-stage-outer"><div class="owl-stage" style="transition: all 0s ease 0s; width: 4320px; transform: translate3d(-864px, 0px, 0px);"><div class="owl-item cloned" style="width: 408px; margin-right: 24px;"><div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./Restoran - Bootstrap Restaurant Template_files/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 408px; margin-right: 24px;"><div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./Restoran - Bootstrap Restaurant Template_files/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned active" style="width: 408px; margin-right: 24px;"><div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./Restoran - Bootstrap Restaurant Template_files/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item active center" style="width: 408px; margin-right: 24px;"><div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./Restoran - Bootstrap Restaurant Template_files/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item active" style="width: 408px; margin-right: 24px;"><div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./Restoran - Bootstrap Restaurant Template_files/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item" style="width: 408px; margin-right: 24px;"><div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./Restoran - Bootstrap Restaurant Template_files/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item" style="width: 408px; margin-right: 24px;"><div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./Restoran - Bootstrap Restaurant Template_files/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 408px; margin-right: 24px;"><div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./Restoran - Bootstrap Restaurant Template_files/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 408px; margin-right: 24px;"><div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./Restoran - Bootstrap Restaurant Template_files/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 408px; margin-right: 24px;"><div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="./Restoran - Bootstrap Restaurant Template_files/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>
            </div>
        </div>
        <!-- Testimonial End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">About Us</a>
                        <a class="btn btn-link" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">Contact Us</a>
                        <a class="btn btn-link" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">Reservation</a>
                        <a class="btn btn-link" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">Privacy Policy</a>
                        <a class="btn btn-link" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">Terms &amp; Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            © <a class="border-bottom" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com/">HTML Codex</a><br><br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">Home</a>
                                <a href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">Cookies</a>
                                <a href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">Help</a>
                                <a href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="display: none;"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="./Restoran - Bootstrap Restaurant Template_files/jquery-3.4.1.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/bootstrap.bundle.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/wow.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/easing.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/waypoints.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/counterup.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/owl.carousel.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/moment.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/moment-timezone.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/tempusdominus-bootstrap-4.min.js.téléchargé"></script>

    <!-- Template Javascript -->
    <script src="./Restoran - Bootstrap Restaurant Template_files/main.js.téléchargé"></script>
    <div id="google_translate_element"></div>
    <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'en'},  'google_translate_element'); 
    } 
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body></html>

<script type="text/JavaScript">
var x =document.getElementById('f');
x.addEventListener('submit',function(e){
    var name =document.getElementById('nom_reservation');
    var tel =document.getElementById('tel');
    var date =document.getElementById('date_reservation');
 

let ziw=/^[0-9]+$/;
if(name.value.length>30 ||name.value=="" || ziw.test(name.value)==true)
{
  let myError0 =document.getElementById('error0');
  myError0.innerHTML="nom invalide";
  e.preventDefault();
}
if(ziw.test(tel.value)==false || tel.value.length>8 ||tel.value=="")
{
  let myError1 =document.getElementById('error1');
  myError1.innerHTML="tel invalide";
  e.preventDefault();
}
if(date.value.length>30 ||date.value=="")
{
  let myError2 =document.getElementById('error2');
  myError2.innerHTML="date invalide";
  e.preventDefault();
}
});

// Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.031 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}

window.initMap = initMap;


</script>
