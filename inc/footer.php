<div class="clrflt"></div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="text-muted col-md-4" style="text-align:center;">
                <?=$config['app_name'].' '.$config['app_version'].'.<small>'.$config['app_version_minor'].'</small>';?><br />
                <a href="#" data-toggle="modal" data-target="#disclaimerModal">Disclaimer</a>
            </div>
            <div class="text-muted col-md-4" style="text-align:center;">
                Like What We're Doing?<br />
                <a href="#" data-toggle="modal" data-target="#donateModal">Donate!</a>
            </div>
            <div class="text-muted col-md-4" style="text-align:center;">
                Need Support?<br />
                <a href="mailto:<?=$config['app_support_email'];?>">Email</a> | <a href="<?=$config['app_support_url'];?>" target="_blank">Forums</a>
            </div>
        </div>
    </div>
    </div>
</footer>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script src="js/sitescripts.0.2.js"></script>

</body>
</html>