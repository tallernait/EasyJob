<?php
    require_once('vues/include/headTest.php');
    $trouve= $_SESSION['Service']['qtDispo'] . ' ' . $_SESSION['Service']['info']->getTypeService(); ?>

	 <div class="container " >
	    <div class="row space100">
            <div class="col-md-4">
                <img src="img/cherche.jpg" style="height:  400px"/>
            </div>
             <div class="col-md-8 space100 ">
                <h2 class="font1 fontGrand1">  On a Trouve </h2>
                <p class="font2 fontGrand3 color2"> <?php echo $trouve;?> </p>
                <p class="font2 fontGrand3"> Voulez Vous Envoyer Votre Offre de Service ? </p></h2>
                <form action="" onsubmit="mailToEmployer()" >
                 <div class="row">
                     <a class=" col-sm-5 btn btn-lg btn-outline-primary btn-line font1 fontGrand3" href="?action=demandeService" > Modifier la Recherche</a>
                     <div class="col-sm-2"></div>
                     <input name="sendDemande" type="hidden" />
                     <input name="action" value="confirmationService" type="hidden" />
                     <input type="submit" class="col-sm-5 btn btn-lg btn-primary font1 fontGrand3" value="OUI Envoyer a Tous" />
                     <span class="warningMessage" id="statusMes"></span>
                 </div>
                 </form>
                 
            </div >
		</div>
	</div>
</div> <!-- This DIV closed the container Fluid-->


<?php     require_once('vues/include/footer.php'); ?>
    