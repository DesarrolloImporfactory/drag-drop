<div class="tmp-formulario">
  <h2>{{ pagesetting('headinger_formulario') }}</h2>
  <form action="">
    @if (!empty(pagesetting('campos')))
      @foreach (pagesetting('campos') as $campo)
        <div class="mb-3">
          @php
            $campo['tipo'] = $campo['tipo'] ?? 'text';
            if($campo['tipo'] != 'select')
            $campo["opciones2"] = $campo["opciones2"] ?? '';

          @endphp 
          @if($campo['tipo'] == 'text')
            <label for="{{ $campo['campos_repetir'] }}" class="form-label">{{ $campo['campos_repetir'] }}</label>
            <input type="{{pagesetting('tipo')}}" class="form-control" id="{{ $campo['campos_repetir'] }}" name="{{ $campo['campos_repetir'] }}" aria-describedby="{{ $campo['campos_repetir'] }}">
          @elseif($campo['tipo'] == 'email')
            <label for="{{ $campo['campos_repetir'] }}" class="form-label">{{ $campo['campos_repetir'] }}</label>
            <input type="email" class="form-control" id="{{ $campo['campos_repetir'] }}" name="{{ $campo['campos_repetir'] }}" aria-describedby="{{ $campo['campos_repetir'] }}">


            @elseif($campo['tipo'] == 'textarea')
            <label for="{{ $campo['campos_repetir'] }}" class="form-label">{{ $campo['campos_repetir'] }}</label>
            <textarea rows="4" class="form-control" id="{{ $campo['campos_repetir'] }}" name="{{ $campo['campos_repetir'] }}" aria-describedby="{{ $campo['campos_repetir'] }}"></textarea>
       
          @elseif($campo['tipo'] == 'date')
            <label for="{{ $campo['campos_repetir'] }}" class="form-label">{{ $campo['campos_repetir'] }}</label>
            <input type="date" class="form-control" id="{{ $campo['campos_repetir'] }}" name="{{ $campo['campos_repetir'] }}" aria-describedby="{{ $campo['campos_repetir'] }}">
          @endif
        </div>
      @endforeach
      <button type="submit" class="btn btn-primary">Enviar</button>
    @endif
  </form>
</div>
