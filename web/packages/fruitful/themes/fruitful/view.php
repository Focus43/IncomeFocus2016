<?php  defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('inc/header.php'); ?>

    <div id="headerShell">
        
        <?php  
            $a = new Area('Header'); 
            $a->enableGridContainer();
            $a->display($c);    
        ?>
        
    </div>
    
    <main id="mainShell" class="container">       
            
        <article>
        
            <?php  if($error){?>
            <?php  Loader::element('system_errors', array('error' => $error)); ?>
            <?php  } ?>
            <?php  print $innerContent; ?>               
        
        </article>
                
    </main><!-- #mainShell -->
    
<?php  $this->inc('inc/footer.php'); ?> 