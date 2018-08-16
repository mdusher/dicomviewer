<script id="imageControlsTemplate" type="text/x-handlebars-template">
    {{#if (gt numImages 1)}}
        <div class="imageControls">
            <div class="scrollbar">
                <input class="imageSlider" type="range" min="1" value="{{this.imageIndex}}" max="{{this.numImages}}"/>
            </div>
        </div>
    {{/if}}
</script>

<div id="imageControls"></div>