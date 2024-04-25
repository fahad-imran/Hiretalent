<!-- <button type="button" class=" dropdown-toggle" data-bs-toggle="dropdown">languages</button> -->

<!-- <div class="dropdown">
        @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
        <span style="color: white;background-color:#6d8500;padding:2px 20px; font-weight:bold; ">{{ $locale_name }}</span>
        @else
        <a class=" underline dropdown-item" href="language/{{ $available_locale }}">
            <span style="padding:2px 20px; background-color:white;color:#6d8500; ">{{ $locale_name }}</span>
        </a>
        @endif
        @endforeach -->
<style>
     select#SelectedLang {
    border-radius: 5px;
    padding: 3px;
    margin-left: 13px;
    /* margin-right: 3px; */
    /* background: grey; */
    outline:0 !important;
    border:none;
    border-radius:20px;
    background:transparent;
    color:white;
}
select#SelectedLang option{
    background-color:white;
    border:0 !important;
    outline:none;
    color:black;
}
select#SelectedLang option:hover{
    background-color:#6d8500;
    color:#6d8500;
}
select#SelectedLang option:selected{
    background-color:black;
}
select#SelectedLang:focus-visible{
    
    outline:0 !important;
    
}
select#SelectedLang:hover{
    cursor:pointer;
}
        </style>

<select onchange="changeLang()" id="SelectedLang">

    @foreach($available_locales as $locale_name => $available_locale)
    <option value="{{ $available_locale }}" @if ($available_locale===$current_locale ) selected @endif>{{ $locale_name }}</option>
    @endforeach
</select>
</div>
<script>
    function changeLang() {
        let selectedValue = document.getElementById("SelectedLang").value;
        window.location = "/language/"+selectedValue;
    }
</script>