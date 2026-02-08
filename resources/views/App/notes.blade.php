<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $note->title }}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{ date('d/m/Y H:i:s', strtotime($note->created_at)) }}</h6>
    <p class="card-text">{{ $note->note }}</p>
    <a href="#" class="card-link"><i class="bi bi-pencil"></i></a>
    <a href="#" class="card-link"><i class="bi bi-trash"></i></a>
  </div>
</div>