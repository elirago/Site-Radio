<style type="text/css">
  /* Start: Video Responsive */
.video-responsive {
    overflow:hidden;
    padding-bottom:400px; /* Adecua este valor para controlar la altura del video */
    position:relative;
    height:0;
}
.video-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
/* End: Video Responsive */
</style>
<!-- Modal -->
<div class="modal fade" id="modalVideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-black">
      <div class="modal-header" style="border-bottom: 1px solid #58c7db;">
        <div id="tituloVideo">
          
        </div>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="muestraVideo">
        
      </div>
    </div>
  </div>
</div>