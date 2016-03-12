<section>
<article>
    <h1><?php echo $osjsonstats; ?> <span class="pull-right">Help</span></h1>
</article>

<article>
    <h2>Features</h2>
    Realtime Json Statistics<br />
</article>

<article>
    <h2>Requierment</h2>
    Mysql, Php5, Apache<br />
</article>

<article>
    <h2>Download</h2>
    <a class="btn btn-default btn-success btn-xs" href="https://github.com/djphil/osjsonstats" target="_blank">
    <i class="glyphicon glyphicon-save"></i> GithHub</a> Source Code
</article>

<article>
    <h2>Install</h2>
    <h3>OpenSim.ini</h3>
    <pre>
    [Startup]
    Agent_Stats_URI = "jsonUserStats"
    </pre>
</article>
<article>
    <h2>Frame Statistics Values</h2>
    The labels of the Frame Statistics values shown by the console command "show stats" are a bit cryptic.<br />
    <h3>Here is a list of the meanings of these values:</h3>
    <pre>
    Dilatn - time dilation
    SimFPS - sim FPS
    PhyFPS - physics FPS
    AgntUp - # of agent updates
    RootAg - # of root agents
    ChldAg - # of child agents
    Prims  - # of total prims
    AtvPrm - # of active prims
    AtvScr - # of active scripts
    ScrLPS - # of script lines per second
    PktsIn - # of in packets per second
    PktOut - # of out packets per second
    PendDl - # of pending downloads
    PendUl - # of pending uploads
    UnackB - # of unacknowledged bytes
    TotlFt - total frame time
    NetFt  - net frame time
    PhysFt - physics frame time
    OthrFt - other frame time
    AgntFt - agent frame time
    ImgsFt - image frame time
    </pre>
</article>

<article>
    <h2>License</h2>
    GNU/GPL General Public License v3.0<br />
</article>

<article>
    <h2>Credit</h2>
    Philippe Lemaire (djphil)
</article>

<article>
    <h2>Donation</h2>
    <?php include_once("inc/paypal.php"); ?>
</article>

</section>
