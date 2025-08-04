function toggleBox(event) {
    const container = event.currentTarget;
  
    // prevent toggle if clicking inside the content (not the main container)
    const clickedInsideContent = event.target.closest('.link-content');
    if (clickedInsideContent) return;
  
    // toggle the class to show/hide content
    container.classList.toggle('open');
  }