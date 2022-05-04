<div id="autocompleteLayout2">
  <div id="autocomplete-box">
    <div class="search-product row no-gutters">
      <div class="col">
        <div id="content_searcher">
          <!-- input -->
          <div id="dropdownSearch"
               aria-haspopup="false"
               aria-expanded="false"
               role="button"
               style="width: 100%; max-width: 520px;"
               class="input-group dropdown-toggle">
            <div class="input-group">
              <input type="text" id="input_search" wire:model.debounce.500ms="search"
                     wire:keydown.enter="goToIndex"
                     wire:click="autocompleteChangeCollapsable('show')"
                     autocomplete="off"
                     list="listOptions"
                     class="form-control  rounded-right"
                     placeholder="{{ $placeholder }}"
                     aria-label="{{ $placeholder }}" aria-describedby="button-addon2">
              @if($buttonSearch)
                <div class="input-group-append">
                  <button class="btn btn-primary px-3 " wire:click="goToIndex" type="submit" id="button-addon2">
                    <i class="{{ $icon }}"></i>
                  </button>
                </div>
              @endif
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <a id="tagHelper" data-toggle="collapse" href="#entityS" role="button" aria-expanded="false" aria-controls="entityS"
     class="collapsed d-none"></a>
  <div class=" collapse {{$collapsable}} multi-collapse position-absolute bg-white" id="entityS" style="     top: 110%;
    left: 0;
    min-width: 100%;
    width: 58vw !important;">
    <div class="container">
      <div class="row">
        @php($count=1)
        @foreach($results as $key => $word)
          @if($key%43 ==0)
            @if($count==$key/43)</div> @php($count++) @endif
      <div class="col-12 col-md-6 col-lg-3">
        @endif
        <input type="radio" class="d-none" id="item{{$word}}" value="{{$word}}"
               wire:click="collapsableInputClick('{{$word}}')">
        <label for="item{{$word}}" id="word"
               class="@if(in_array($word,$featuredOptions))font-weight-bold @endif">{{$word}}</label>
        @endforeach
      </div>
    </div>
  </div>
</div>
</div>

@section('scripts')
  @parent
  <script>

    $(document).ready(function () {

      $('#input_search').on('click', function () {
        $('#tagHelper').click();

      });

      $(document).on("click", function (e) {
        var container = $('div.collapse.show');

        if (!container.is(e.target) && container.has(e.target).length === 0) {
          $('div.collapse.show').removeClass('show');

        }
      });
    });

  </script>
@stop