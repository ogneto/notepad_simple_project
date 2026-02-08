<div class="card mb-3 shadow-sm border-0">
  <div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h5 class="card-title fw-bold text-gradient mb-0">{{ $note->title }}</h5>
        <small class="text-secondary">{{ date('d/m/Y H:i:s', strtotime($note->created_at)) }}</small>
    </div>
    
    <p class="card-text text-muted mb-4">{{ $note->note }}</p>
    
    <div class="d-flex justify-content-end gap-2">
        <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle px-2" title="Edit">
            <i class="bi bi-pencil"></i>
        </a>
        <a href="#" class="btn btn-outline-danger btn-sm rounded-circle px-2" title="Delete">
            <i class="bi bi-trash"></i>
        </a>
    </div>
  </div>
</div>