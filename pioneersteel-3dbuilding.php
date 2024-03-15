<!DOCTYPE html>
<html>

<head>
    <title>Pioneer Steel &amp; Pipe | 3D Building</title>
    <meta name="generator" content="BBEdit 13.5" />

    <!-- <link href='https://fonts.googleapis.com/css?family=Raleyway,Graduate:400,700,300,600,400italic' rel='stylesheet' type='text/css'> -->

    <!-- Babylon.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.6.2/dat.gui.min.js"></script>
    <script src="https://preview.babylonjs.com/ammo.js"></script>
    <script src="https://preview.babylonjs.com/cannon.js"></script>
    <script src="https://preview.babylonjs.com/Oimo.js"></script>
    <script src="https://preview.babylonjs.com/earcut.min.js"></script>
    <script src="https://preview.babylonjs.com/babylon.js"></script>
    <script src="https://preview.babylonjs.com/materialsLibrary/babylonjs.materials.min.js"></script>
    <script src="https://preview.babylonjs.com/proceduralTexturesLibrary/babylonjs.proceduralTextures.min.js"></script>
    <script src="https://preview.babylonjs.com/postProcessesLibrary/babylonjs.postProcess.min.js"></script>
    <script src="https://preview.babylonjs.com/loaders/babylonjs.loaders.js"></script>
    <script src="https://preview.babylonjs.com/serializers/babylonjs.serializers.min.js"></script>
    <script src="https://preview.babylonjs.com/gui/babylon.gui.min.js"></script>
    <script src="https://preview.babylonjs.com/inspector/babylon.inspector.bundle.js"></script>
    <!--<script src="https://cdn.babylonjs.com/ammo.js"></script>
        <script src="https://cdn.babylonjs.com/cannon.js"></script>
        <script src="https://cdn.babylonjs.com/Oimo.js"></script>
        <script src="https://cdn.babylonjs.com/earcut.min.js"></script>
        <script src="https://cdn.babylonjs.com/babylon.js"></script>
        <script src="https://cdn.babylonjs.com/materialsLibrary/babylonjs.materials.min.js"></script>
        <script src="https://cdn.babylonjs.com/proceduralTexturesLibrary/babylonjs.proceduralTextures.min.js"></script>
        <script src="https://cdn.babylonjs.com/postProcessesLibrary/babylonjs.postProcess.min.js"></script>
        <script src="https://cdn.babylonjs.com/loaders/babylonjs.loaders.js"></script>
        <script src="https://cdn.babylonjs.com/serializers/babylonjs.serializers.min.js"></script>
        <script src="https://cdn.babylonjs.com/gui/babylon.gui.min.js"></script>
        <script src="https://cdn.babylonjs.com/inspector/babylon.inspector.bundle.js"></script>
        -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css"
        rel="stylesheet" />
    <script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript"
        charset="utf-8"></script>

    <script>
    $(function() {
        $("#accordion").accordion({
            heightStyle: "content",
            collapsible: true
        });
    });
    </script>

    <!-- <style>
</style> -->

</head>

<body>

    <div class="wrapperHeader">
        <div class="headerLogo"><img
                src="http://www.pioneerboys.com/wp-content/themes/pioneersteel/images/header-logo.png" border="0"></div>
        <div class="headerTitle">3D Metal Building Customization Tool</div>
    </div>

    <div class="wrapperLayout">
        <div class="containerSidebar">
            <div id="accordion">
                <h3>Camera</h3>
                <div>
                    <p>
                    <div>
                        <input class="SelectedCamera" type="radio" id="Rotate" name="SelectedCamera" value="arcCamera"
                            checked>
                        <label for="html">Rotate Around Center</label><br>
                        <input class="SelectedCamera" type="radio" id="Zoom" name="SelectedCamera" value="zoomCamera">
                        <label for="css">Zoom To Mouse</label><br>
                        <input class="SelectedCamera" type="radio" id="Shooter" name="SelectedCamera" value="uniCamera">
                        <label for="javascript">1st Person</label>
                    </div>
                    </p>
                </div>
                <h3>Building Size</h3>
                <div>
                    <p>
                        <label for="BuildingWidth" style="padding-right: 8px;">Width</label>
                        <span class="ui-icon ui-icon-circle-arrow-w" onclick="widthLeft()"></span>
                        <input style="width:140px" id="BuildingWidth" type="range" min="5" max="60" step="1" value="20">
                        <span class="ui-icon ui-icon-circle-arrow-e" onclick="widthRight()"></span>
                        <label id="BuildingWidthLabel">20</label>
                        </br>
                        <label for="BuildingLength">Length</label>
                        <span class="ui-icon ui-icon-circle-arrow-w" onclick="lengthLeft()"></span>
                        <input style="width:140px" id="BuildingLength" type="range" min="5" max="200" step="1"
                            value="20">
                        <span class="ui-icon ui-icon-circle-arrow-e" onclick="lengthRight()"></span>
                        <label id="BuildingLengthLabel">20</label>
                        </br>
                        <label for="BuildingHeight" style="padding-right: 2px;">Height</label>
                        <span class="ui-icon ui-icon-circle-arrow-w" onclick="heightLeft()"></span>
                        <input style="width:140px" id="BuildingHeight" type="range" min="5" max="20" step="1" value="9">
                        <span class="ui-icon ui-icon-circle-arrow-e" onclick="heightRight()"></span>
                        <label id="BuildingHeightLabel">9</label>
                    </p>
                </div>
                <h3>Color Selection</h3>
                <div>
                    <p>
                        <label style="padding-right: 3px;" for="WallColor">Select Wall Color</label>
                        <select id="WallColor" name="WallColor" value="141,131,123">
                            <option value="78,78,84">Charcoal</option>
                            <option selected value="141,131,123">Desert</option>
                            <option value="164,158,151">Gray</option>
                            <option value="232,240,237">Polar</option>
                            <option value="255,255,255">Brilliant</option>
                            <option value="35,48,49">Fern</option>
                            <option value="34,68,58">Hunter</option>
                            <option value="95,113,101">Colony</option>
                            <option value="147,19,33">Crimson</option>
                            <option value="100,29,40">Rustic</option>
                            <option value="54,36,46">Burgundy</option>
                            <option value="37,61,99">Gallery</option>
                            <option value="64,98,130">Hawaiian</option>
                            <option value="214,205,188">Light Stone</option>
                            <option value="164,134,117">Tan</option>
                            <option value="67,49,52">Brown</option>
                            <option value="63,59,58">Burnished Slate</option>
                            <option value="124,63,45">Copper Metallic</option>
                            <option value="170,172,178">Galvalume</option>
                        </select>
                    </p>
                    <p>
                        <label for="RoofColor">Select Roof Color</label>
                        <select id="RoofColor" name="RoofColor" value="141,131,123">
                            <option value="78,78,84">Charcoal</option>
                            <option selected value="141,131,123">Desert</option>
                            <option value="164,158,151">Gray</option>
                            <option value="232,240,237">Polar</option>
                            <option value="255,255,255">Brilliant</option>
                            <option value="35,48,49">Fern</option>
                            <option value="34,68,58">Hunter</option>
                            <option value="95,113,101">Colony</option>
                            <option value="147,19,33">Crimson</option>
                            <option value="100,29,40">Rustic</option>
                            <option value="54,36,46">Burgundy</option>
                            <option value="37,61,99">Gallery</option>
                            <option value="64,98,130">Hawaiian</option>
                            <option value="214,205,188">Light Stone</option>
                            <option value="164,134,117">Tan</option>
                            <option value="67,49,52">Brown</option>
                            <option value="63,59,58">Burnished Slate</option>
                            <option value="124,63,45">Copper Metallic</option>
                            <option value="170,172,178">Galvalume</option>
                        </select>
                    </p>
                    <p>
                        <label for="TrimColor">Select Trim Color</label>
                        <select id="TrimColor" name="TrimColor" value="164,134,117">
                            <option value="78,78,84">Charcoal</option>
                            <option value="141,131,123">Desert</option>
                            <option value="164,158,151">Gray</option>
                            <option value="232,240,237">Polar</option>
                            <option value="255,255,255">Brilliant</option>
                            <option value="35,48,49">Fern</option>
                            <option value="34,68,58">Hunter</option>
                            <option value="95,113,101">Colony</option>
                            <option value="147,19,33">Crimson</option>
                            <option value="100,29,40">Rustic</option>
                            <option value="54,36,46">Burgundy</option>
                            <option value="37,61,99">Gallery</option>
                            <option value="64,98,130">Hawaiian</option>
                            <option value="214,205,188">Light Stone</option>
                            <option selected value="164,134,117">Tan</option>
                            <option value="67,49,52">Brown</option>
                            <option value="63,59,58">Burnished Slate</option>
                            <option value="124,63,45">Copper Metallic</option>
                            <option value="170,172,178">Galvalume</option>
                        </select>
                    </p>
                    <p>
                        <label style="padding-right: 3px;" for="DoorColor">Select Door Color</label>
                        <select id="DoorColor" name="DoorColor" value="141,131,123">
                            <option value="78,78,84">Charcoal</option>
                            <option selected value="141,131,123">Desert</option>
                            <option value="164,158,151">Gray</option>
                            <option value="232,240,237">Polar</option>
                            <option value="255,255,255">Brilliant</option>
                            <option value="35,48,49">Fern</option>
                            <option value="34,68,58">Hunter</option>
                            <option value="95,113,101">Colony</option>
                            <option value="147,19,33">Crimson</option>
                            <option value="100,29,40">Rustic</option>
                            <option value="54,36,46">Burgundy</option>
                            <option value="37,61,99">Gallery</option>
                            <option value="64,98,130">Hawaiian</option>
                            <option value="214,205,188">Light Stone</option>
                            <option value="164,134,117">Tan</option>
                            <option value="67,49,52">Brown</option>
                            <option value="63,59,58">Burnished Slate</option>
                            <option value="124,63,45">Copper Metallic</option>
                            <option value="170,172,178">Galvalume</option>
                        </select>
                    </p>
                </div>
                <h3>Roof</h3>
                <div>
                    <p>
                        <label for="RoofPitch">Roof Pitch</label>
                        </br>
                        <span class="ui-icon ui-icon-circle-arrow-w" onclick="pitchLeft()"></span>
                        <input id="RoofPitch" type="range" min="1" max="5" step="1" value="2">
                        <span class="ui-icon ui-icon-circle-arrow-e" onclick="pitchRight()"></span>
                        <label id="RoofPitchLabel">2/12</label>
                        </br>
                        <label for="SideOverhang">Side Overhangs</label>
                        </br>
                        <span class="ui-icon ui-icon-circle-arrow-w" onclick="overhangFBLeft()"></span>
                        <input id="SideOverhang" type="range" min="0" max="2" step="1" value="0">
                        <span class="ui-icon ui-icon-circle-arrow-e" onclick="overhangFBRight()"></span>
                        <label id="SideOverhangLabel">0</label>
                        </br>
                        <label for="FrontOverhang">Front Gable Extensions</label>
                        </br>
                        <span class="ui-icon ui-icon-circle-arrow-w" onclick="overhangLRFrontLeft()"></span>
                        <input id="FrontOverhang" type="range" min="0" max="50" step="5" value="0">
                        <span class="ui-icon ui-icon-circle-arrow-e" onclick="overhangLRFrontRight()"></span>
                        <label id="FrontOverhangLabel">0</label>
                        </br>
                        <label for="BackOverhang">Back Gable Extensions</label>
                        </br>
                        <span class="ui-icon ui-icon-circle-arrow-w" onclick="overhangLRBackLeft()"></span>
                        <input id="BackOverhang" type="range" min="0" max="50" step="5" value="0">
                        <span class="ui-icon ui-icon-circle-arrow-e" onclick="overhangLRBackRight()"></span>
                        <label id="BackOverhangLabel">0</label>
                    </p>
                </div>
                <h3>Front Lean To</h3>
                <div>
                    <p>
                        <label for="leanToSwitch0" style="padding-right: 8px;">Front</label>
                        <label class="switch">
                            <input id="leanToSwitch0" type="checkbox" onclick="leanToSwitch(0)">
                            <span class="slider round"></span>
                        </label>
                        </br>
                        </br>
                        <label for="leanToWidth0" style="padding-right:7px; visibility: hidden;"
                            class="leanto-0">Width</label>
                        <span style="visibility: hidden;" class="leanto-0 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToWidthLeft(0)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-0 leanToInput"
                            id="leanToWidth0" type="text" value="5" disabled>
                        <span style="visibility: hidden;" class="leanto-0 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToWidthRight(0)"></span>
                        </br>
                        <label for="leanToPitch0" style="padding-right:10px; visibility: hidden;"
                            class="leanto-0">Pitch</label>
                        <span style="visibility: hidden;" class="leanto-0 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToPitchLeft(0)"></span>





                        <!--------------------Pitch value------------------------>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-0 leanToInput"
                            id="leanToPitch0" type="text" value="1" disabled>




                        <span style="visibility: hidden;" class="leanto-0 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToPitchRight(0)"></span>
                        </br>
                        <label for="leanToDrop0" style="padding-right:11px; visibility: hidden;"
                            class="leanto-0">Drop</label>
                        <span style="visibility: hidden;" class="leanto-0 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToDropLeft(0)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-0 leanToInput"
                            id="leanToDrop0" type="text" value="0" disabled>
                        <span style="visibility: hidden;" class="leanto-0 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToDropRight(0)"></span>
                        </br>
                        <label for="leanToCut10" style="padding-right:8px; visibility: hidden;" class="leanto-0">Cut
                            1</label>
                        <span style="visibility: hidden;" class="leanto-0 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToCut1Left(0)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-0 leanToInput"
                            id="leanToCut10" type="text" value="0" disabled>
                        <span style="visibility: hidden;" class="leanto-0 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToCut1Right(0)"></span>
                        </br>
                        <label for="leanToCut20" style="padding-right:9px; visibility: hidden;" class="leanto-0">Cut
                            2</label>
                        <span style="visibility: hidden;" class="leanto-0 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToCut2Left(0)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-0 leanToInput"
                            id="leanToCut20" type="text" value="0" disabled>
                        <span style="visibility: hidden;" class="leanto-0 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToCut2Right(0)"></span>
                        </br>
                        </br>
                        <label for="leanToWrapLeft0" style="visibility: hidden; padding-right: 17px;"
                            class="leanto-0">Wrap Left</label>
                        <label style="visibility: hidden;" class="leanto-0 switch">
                            <input style="visibility: hidden;" id="leanToWrapLeft0" type="checkbox" class="leanto-0"
                                onclick="leanToWrapLeft(0)" disabled>
                            <span style="visibility: hidden;" class="leanto-0 slider round"></span>
                        </label>
                        </br>
                        <label for="leanToWrapRight0" style="visibility: hidden; padding-right: 8px;"
                            class="leanto-0">Wrap Right</label>
                        <label style="visibility: hidden;" class="leanto-0 switch">
                            <input style="visibility: hidden;" id="leanToWrapRight0" type="checkbox" class="leanto-0"
                                onclick="leanToWrapRight(0)" disabled>
                            <span style="visibility: hidden;" class="leanto-0 slider round"></span>
                        </label>
                    </p>
                </div>
                <h3>Right Lean To</h3>
                <div>
                    <p>
                        <label for="leanToSwitch1" style="padding-right: 8px;">Right</label>
                        <label class="switch">
                            <input id="leanToSwitch1" type="checkbox" onclick="leanToSwitch(1)">
                            <span class="slider round"></span>
                        </label>
                        </br>
                        </br>
                        <label for="leanToWidth1" style="padding-right:7px; visibility: hidden;"
                            class="leanto-1">Width</label>
                        <span style="visibility: hidden;" class="leanto-1 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToWidthLeft(1)"></span>
                        <input style="width:25px; text-align:center;  visibility: hidden;" class="leanto-1 leanToInput"
                            id="leanToWidth1" type="text" value="5" disabled>
                        <span style="visibility: hidden;" class="leanto-1 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToWidthRight(1)"></span>
                        </br>
                        <label for="leanToPitch1" style="padding-right:10px; visibility: hidden;"
                            class="leanto-1">Pitch</label>
                        <span style="visibility: hidden;" class="leanto-1 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToPitchLeft(1)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-1 leanToInput"
                            id="leanToPitch1" type="text" value="2" disabled>
                        <span style="visibility: hidden;" class="leanto-1 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToPitchRight(1)"></span>
                        </br>
                        <label for="leanToDrop1" style="padding-right:11px; visibility: hidden;"
                            class="leanto-1">Drop</label>
                        <span style="visibility: hidden;" class="leanto-1 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToDropLeft(1)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-1 leanToInput"
                            id="leanToDrop1" type="text" value="0" disabled>
                        <span style="visibility: hidden;" class="leanto-1 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToDropRight(1)"></span>
                        </br>
                        <label for="leanToCut11" style="padding-right:8px; visibility: hidden;" class="leanto-1">Cut
                            1</label>
                        <span style="visibility: hidden;" class="leanto-1 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToCut1Left(1)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-1 leanToInput"
                            id="leanToCut11" type="text" value="0" disabled>
                        <span style="visibility: hidden;" class="leanto-1 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToCut1Right(1)"></span>
                        </br>
                        <label for="leanToCut21" style="padding-right:9px; visibility: hidden;" class="leanto-1">Cut
                            2</label>
                        <span style="visibility: hidden;" class="leanto-1 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToCut2Left(1)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-1 leanToInput"
                            id="leanToCut21" type="text" value="0" disabled>
                        <span style="visibility: hidden;" class="leanto-1 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToCut2Right(1)"></span>
                        </br>
                        </br>
                        <label for="leanToWrapLeft1" style="visibility: hidden; padding-right: 17px;"
                            class="leanto-1">Wrap Left</label>
                        <label style="visibility: hidden;" class="leanto-1 switch">
                            <input style="visibility: hidden;" id="leanToWrapLeft1" type="checkbox" class="leanto-1"
                                onclick="leanToWrapLeft(1)" disabled>
                            <span style="visibility: hidden;" class="leanto-1 slider round"></span>
                        </label>
                        </br>
                        <label for="leanToWrapRight1" style="visibility: hidden; padding-right: 8px;"
                            class="leanto-1">Wrap Right</label>
                        <label style="visibility: hidden;" class="leanto-1 switch">
                            <input style="visibility: hidden;" id="leanToWrapRight1" type="checkbox" class="leanto-1"
                                onclick="leanToWrapRight(1)" disabled>
                            <span style="visibility: hidden;" class="leanto-1 slider round"></span>
                        </label>
                    </p>
                </div>
                <h3>Back Lean To</h3>
                <div>
                    <p>
                        <label for="leanToSwitch2" style="padding-right: 8px;">Back</label>
                        <label class="switch">
                            <input id="leanToSwitch2" type="checkbox" onclick="leanToSwitch(2)">
                            <span class="slider round"></span>
                        </label>
                        </br>
                        </br>
                        <label for="leanToWidth2" style="padding-right:7px; visibility: hidden;"
                            class="leanto-2">Width</label>
                        <span style="visibility: hidden;" class="leanto-2 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToWidthLeft(2)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-2 leanToInput"
                            id="leanToWidth2" type="text" value="5" disabled>
                        <span style="visibility: hidden;" class="leanto-2 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToWidthRight(2)"></span>
                        </br>
                        <label for="leanToPitch2" style="padding-right:10px; visibility: hidden;"
                            class="leanto-2">Pitch</label>
                        <span style="visibility: hidden;" class="leanto-2 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToPitchLeft(1)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-2 leanToInput"
                            id="leanToPitch2" type="text" value="2" disabled>
                        <span style="visibility: hidden;" class="leanto-2 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToPitchRight(2)"></span>
                        </br>
                        <label for="leanToDrop2" style="padding-right:11px; visibility: hidden;"
                            class="leanto-2">Drop</label>
                        <span style="visibility: hidden;" class="leanto-2 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToDropLeft(2)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-2 leanToInput"
                            id="leanToDrop2" type="text" value="0" disabled>
                        <span style="visibility: hidden;" class="leanto-2 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToDropRight(2)"></span>
                        </br>
                        <label for="leanToCut12" style="padding-right:8px; visibility: hidden;" class="leanto-2">Cut
                            1</label>
                        <span style="visibility: hidden;" class="leanto-2 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToCut1Left(2)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-2 leanToInput"
                            id="leanToCut12" type="text" value="0" disabled>
                        <span style="visibility: hidden;" class="leanto-2 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToCut1Right(2)"></span>
                        </br>
                        <label for="leanToCut22" style="padding-right:9px; visibility: hidden;" class="leanto-2">Cut
                            2</label>
                        <span style="visibility: hidden" class="leanto-2 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToCut2Left(2)"></span>
                        <input style="width:25px; text-align:center;  visibility: hidden;" class="leanto-2 leanToInput"
                            id="leanToCut22" type="text" value="0" disabled>
                        <span style="visibility: hidden;" class="leanto-2 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToCut2Right(2)"></span>
                        </br>
                        </br>
                        <label for="leanToWrapLeft2" style="visibility: hidden; padding-right: 17px;"
                            class="leanto-2">Wrap Left</label>
                        <label style="visibility: hidden;" class="leanto-2 switch">
                            <input style="visibility: hidden;" id="leanToWrapLeft2" type="checkbox" class="leanto-2"
                                onclick="leanToWrapLeft(2)" disabled>
                            <span style="visibility: hidden;" class="leanto-2 slider round"></span>
                        </label>
                        </br>
                        <label for="leanToWrapRight2" style="visibility: hidden; padding-right: 8px;"
                            class="leanto-2">Wrap Right</label>
                        <label style="visibility: hidden;" class="leanto-2 switch">
                            <input style="visibility: hidden;" id="leanToWrapRight2" type="checkbox" class="leanto-2"
                                onclick="leanToWrapRight(2)" disabled>
                            <span style="visibility: hidden;" class="leanto-2 slider round"></span>
                        </label>
                    </p>
                </div>
                <h3>Left Lean To</h3>
                <div>
                    <p>
                        <label for="leanToSwitch3" style="padding-right: 8px;">Left</label>
                        <label class="switch">
                            <input id="leanToSwitch3" type="checkbox" onclick="leanToSwitch(3)">
                            <span class="slider round"></span>
                        </label>
                        </br>
                        </br>
                        <label for="leanToWidth3" style="padding-right:7px; visibility: hidden;"
                            class="leanto-3">Width</label>
                        <span style="visibility: hidden;" class="leanto-3 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToWidthLeft(3)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-3 leanToInput"
                            id="leanToWidth3" type="text" value="5" disabled>
                        <span style="visibility: hidden;" class="leanto-3 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToWidthRight(3)"></span>
                        </br>
                        <label for="leanToPitch3" style="padding-right:10px; visibility: hidden;"
                            class="leanto-3">Pitch</label>
                        <span style="visibility: hidden;" class="leanto-3 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToPitchLeft(3)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-3 leanToInput"
                            id="leanToPitch3" type="text" value="2" disabled>
                        <span style="visibility: hidden;" class="leanto-3 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToPitchRight(3)"></span>
                        </br>
                        <label for="leanToDrop3" style="padding-right:11px; visibility: hidden;"
                            class="leanto-3">Drop</label>
                        <span style="visibility: hidden;" class="leanto-3 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToDropLeft(3)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-3 leanToInput"
                            id="leanToDrop3" type="text" value="0" disabled>
                        <span style="visibility: hidden;" class="leanto-3 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToDropRight(3)"></span>
                        </br>
                        <label for="leanToCut13" style="padding-right:8px; visibility: hidden;" class="leanto-3">Cut
                            1</label>
                        <span style="visibility: hidden;" class="leanto-3 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToCut1Left(3)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-3 leanToInput"
                            id="leanToCut13" type="text" value="0" disabled>
                        <span style="visibility: hidden;" class="leanto-3 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToCut1Right(3)"></span>
                        </br>
                        <label for="leanToCut23" style="padding-right:9px; visibility: hidden;" class="leanto-3">Cut
                            2</label>
                        <span style="visibility: hidden;" class="leanto-3 ui-icon ui-icon-circle-arrow-w"
                            onclick="leanToCut2Left(3)"></span>
                        <input style="width:25px; text-align:center; visibility: hidden;" class="leanto-3 leanToInput"
                            id="leanToCut23" type="text" value="0" disabled>
                        <span style="visibility: hidden;" class="leanto-3 ui-icon ui-icon-circle-arrow-e"
                            onclick="leanToCut2Right(3)"></span>
                        </br>
                        </br>
                        <label for="leanToWrapLeft3" style="visibility: hidden; padding-right: 17px;"
                            class="leanto-3">Wrap Left</label>
                        <label style="visibility: hidden;" class="leanto-3 switch">
                            <input style="visibility: hidden;" id="leanToWrapLeft3" type="checkbox" class="leanto-3"
                                onclick="leanToWrapLeft(3)" disabled>
                            <span style="visibility: hidden;" class="leanto-3 slider round"></span>
                        </label>
                        </br>
                        <label for="leanToWrapRight3" style="visibility: hidden; padding-right: 8px;"
                            class="leanto-3">Wrap Right</label>
                        <label style="visibility: hidden;" class="leanto-3 switch">
                            <input style="visibility: hidden;" id="leanToWrapRight3" type="checkbox" class="leanto-3"
                                onclick="leanToWrapRight(3)" disabled>
                            <span style="visibility: hidden;" class="leanto-3 slider round"></span>
                        </label>
                    </p>
                </div>
                <h3>Windows</h3>
                <div>
                    <p>
                        <label>Front:</label>
                        <button type="button" onclick="addWindow(0)">Add</button>
                        <button id="remWin0" style="visibility: hidden" type="button"
                            onclick="removeWindow(0)">Remove</button>
                        <span id="nWinArrow0" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-n"
                            onclick="windowUp(0)"></span>
                        <span id="sWinArrow0" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-s"
                            onclick="windowDown(0)"></span>
                        <span id="wWinArrow0" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-w"
                            onclick="windowLeft(0)"></span>
                        <span id="eWinArrow0" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-e"
                            onclick="windowRight(0)"></span>
                    </p>
                    <p>
                        <label>Right:</label>
                        <button type="button" onclick="addWindow(1)">Add</button>
                        <button id="remWin1" style="visibility: hidden" type="button"
                            onclick="removeWindow(1)">Remove</button>
                        <span id="nWinArrow1" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-n"
                            onclick="windowUp(1)"></span>
                        <span id="sWinArrow1" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-s"
                            onclick="windowDown(1)"></span>
                        <span id="wWinArrow1" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-w"
                            onclick="windowLeft(1)"></span>
                        <span id="eWinArrow1" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-e"
                            onclick="windowRight(1)"></span>
                    </p>
                    <p>
                        <label>Back:</label>
                        <button type="button" onclick="addWindow(2)">Add</button>
                        <button id="remWin2" style="visibility: hidden" type="button"
                            onclick="removeWindow(2)">Remove</button>
                        <span id="nWinArrow2" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-n"
                            onclick="windowUp(2)"></span>
                        <span id="sWinArrow2" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-s"
                            onclick="windowDown(2)"></span>
                        <span id="wWinArrow2" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-w"
                            onclick="windowLeft(2)"></span>
                        <span id="eWinArrow2" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-e"
                            onclick="windowRight(2)"></span>
                    </p>
                    <p>
                        <label style="padding-right: 8px;">Left: </label>
                        <button type="button" onclick="addWindow(3)">Add</button>
                        <button id="remWin3" style="visibility: hidden" type="button"
                            onclick="removeWindow(3)">Remove</button>
                        <span id="nWinArrow3" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-n"
                            onclick="windowUp(3)"></span>
                        <span id="sWinArrow3" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-s"
                            onclick="windowDown(3)"></span>
                        <span id="wWinArrow3" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-w"
                            onclick="windowLeft(3)"></span>
                        <span id="eWinArrow3" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-e"
                            onclick="windowRight(3)"></span>
                    </p>
                </div>
                <h3>Doors</h3>
                <div>
                    <p>
                        <label for="DoorType">Select Door Type</label>
                        <select id="DoorType" name="DoorType" value="3x7 Single Door">
                            <option selected value="3x7 Single Door">3x7 Single Door</option>
                            <option value="4x7 Single Door">4x7 Single Door</option>
                            <option value="6x7 Double Door">6x7 Double Door</option>
                            <option value="8x8 Sectional">8x8 Sectional Door</option>
                            <option value="8x10 Sectional">8x10 Sectional Door</option>
                            <option value="10x8 Sectional">10x8 Sectional Door</option>
                            <option value="10x10 Sectional">10x10 Sectional Door</option>
                            <option value="12x8 Sectional">12x8 Sectional Door</option>
                            <option value="8x8 Roll Up">8x8 Roll Up Door</option>
                            <option value="8x10 Roll Up">8x10 Roll Up Door</option>
                            <option value="10x8 Roll Up">10x8 Roll Up Door</option>
                            <option value="10x10 Roll Up">10x10 Roll Up Door</option>
                            <option value="10x12 Roll Up">10x12 Roll Up Door</option>
                            <option value="10x14 Roll Up">10x14 Roll Up Door</option>
                            <option value="12x8 Roll Up">12x8 Roll Up Door</option>
                            <option value="12x10 Roll Up">12x10 Roll Up Door</option>
                            <option value="12x12 Roll Up">12x12 Roll Up Door</option>
                            <option value="12x14 Roll Up">12x14 Roll Up Door</option>
                            <option value="14x8 Roll Up">14x8 Roll Up Door</option>
                            <option value="14x10 Roll Up">14x10 Roll Up Door</option>
                            <option value="14x12 Roll Up">14x12 Roll Up Door</option>
                            <option value="14x14 Roll Up">14x14 Roll Up Door</option>
                        </select>

                    <p>
                        <label>Front:</label>
                        <button type="button"
                            onclick="addDoor(0, document.querySelector('#DoorType').value, document.querySelector('#DoorColor').value)">Add</button>
                        <button id="remDoor0" style="visibility: hidden" type="button"
                            onclick="removeDoor(0)">Remove</button>
                        <span id="wDoorArrow0" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-w"
                            onclick="doorLeft(0)"></span>
                        <span id="eDoorArrow0" style="visibility: hidden;" class="ui-icon ui-icon-circle-arrow-e"
                            onclick="doorRight(0)"></span>

                    </p>
                    <p>
                        <label>Right:</label>
                        <button type="button"
                            onclick="addDoor(1, document.querySelector('#DoorType').value, document.querySelector('#DoorColor').value)">Add</button>
                        <button id="remDoor1" style="visibility: hidden" type="button"
                            onclick="removeDoor(1)">Remove</button>
                        <span id="wDoorArrow1" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-w"
                            onclick="doorLeft(1)"></span>
                        <span id="eDoorArrow1" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-e"
                            onclick="doorRight(1)"></span>

                    </p>
                    <p>
                        <label>Back:</label>
                        <button type="button"
                            onclick="addDoor(2, document.querySelector('#DoorType').value, document.querySelector('#DoorColor').value, document.querySelector('#DoorColor').value)">Add</button>
                        <button id="remDoor2" style="visibility: hidden" type="button"
                            onclick="removeDoor(2)">Remove</button>
                        <span id="wDoorArrow2" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-w"
                            onclick="doorLeft(2)"></span>
                        <span id="eDoorArrow2" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-e"
                            onclick="doorRight(2)"></span>

                    </p>
                    <p>
                        <label style="padding-right: 8px;">Left: </label>
                        <button type="button"
                            onclick="addDoor(3, document.querySelector('#DoorType').value, document.querySelector('#DoorColor').value)">Add</button>
                        <button id="remDoor3" style="visibility: hidden" type="button"
                            onclick="removeDoor(3)">Remove</button>
                        <span id="wDoorArrow3" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-w"
                            onclick="doorLeft(3)"></span>
                        <span id="eDoorArrow3" style="visibility: hidden" class="ui-icon ui-icon-circle-arrow-e"
                            onclick="doorRight(3)"></span>

                    </p>
                </div>
                <h3>Finalize</h3>
                <div>
                    <button hidden type="button" onclick="captureScreen()">Capture</button>
                    <button type="button" onclick="showFL()" id="send_email" name="send_email">Request Quote</button>
                </div>
            </div>
        </div>
        <div class="containerCanvas"><canvas id="renderCanvas"></canvas></div>
        <div data-featherlight class="lightbox" id="mylightbox">
            <form id="email_quote" method="post">
                <input type="text" id="email_address" name="email_address" placeholder="Email" required></br>
                <input type="text" id="firstname" name="firstname" placeholder="First Name" required></br>
                <input type="text" id="lastname" name="lastname" placeholder="Last Name" required></br>
                <input type="text" id="company" name="company" placeholder="Company"></br>
                <input type="text" id="address" name="address" placeholder="Address"></br>
                <input type="text" id="city" name="city" placeholder="City"></br>
                <input type="text" id="state" name="state" placeholder="State"></br>
                <input type="text" id="zipcode" name="zipcode" placeholder="Zip Code"></br>
                <input type="text" id="phone" name="phone" placeholder="Phone" required></br>
                <button type="submit" id="send_email" name="send_email">Request Quote</button>
                <textarea hidden id="email" name="email"></textarea>
            </form>
        </div>
    </div>

    <div class="wrapperFooter">Copyright &copy; Pioneer Steel & Pipe. All rights reserved.</div>

    <script>
    var fl = null;
    var canvas = document.getElementById("renderCanvas");
    var ground = null;
    var grassMaterial = null;
    var grassTexture = null;
    var floor = null;
    var floorMaterial = null;
    var house = null;
    var corners = [];
    var walls = [];
    var length = 20;
    var width = 20;
    var height = 9;
    var ply = 0;
    var overhangFB = 0;
    var overhangLRBack = 0;
    var overhangLRFront = 0;
    var overlapLRFront = ply + overhangLRFront;
    var overlapLRBack = ply + overhangLRBack;
    var overlapFB = ply + overhangFB;
    var house = null;
    var wallMeshes = [];
    var frontUV = null;
    var backUV = null;
    var wallColor = [0.555, 0.514, 0.482];
    var roofColor = [0.555, 0.514, 0.482];
    var trimColor = [0.643, 0.525, 0.459];
    var doorColor = [0.555, 0.514, 0.482];
    var wallColorText = "Desert";
    var roofColorText = "Desert";
    var trimColorText = "Tan";
    var doorColorText = "Desert";
    var roofTop = null;
    var tempRoofTop = null;
    var roofFB = null;
    var roofPitch = 2;
    var leanToPitch = 1;
    var roofHeight = 0.83333;
    var roofMesh = null;
    var roofSection = null;
    var wholeRoofprint = null;
    var roofPositions = [];
    var roofIndices = [];
    var ceiling = null;
    var apexes = [];
    var planesFB = [
        ["C0", "C1", "A0"],
        ["C2", "C3", "A1"]
    ];
    var planesLR = [
        ["C1", "C2", "A1", "A0"],
        ["C3", "C0", "A0", "A1"]
    ];
    var gablePosts = [];
    baseData = [(0 - (width / 2)), 0, (width / 2), 0, (width / 2), length, (0 - (width / 2)), length];
    var roofApexDataLR = [0, 0 - overhangFB - ply, 0, 20 + overhangFB + ply];
    var roofApexDataFB = [0, 0 - ply, 0, 20 + ply];
    var defaultWindow = null;
    var windowMeshNames = [];
    var windowMeshes = [];
    var windowSpaces = [
        [],
        [],
        [],
        []
    ];
    // var windowSpaces0 = [];
    // var windowSpaces1 = [];
    // var windowSpaces2 = [];
    // var windowSpaces3 = [];
    var defaultDoor = null;
    var doorMeshNames = [];
    var doorMeshes = [];
    var door3x7MeshNames = [];
    var door4x7MeshNames = [];
    var door6x7MeshNames = [];
    var doors = [
        [],
        [],
        [],
        []
    ];
    var doorSpaces = [
        [],
        [],
        [],
        []
    ];
    var wallTrimMeshNames = [];
    var wallTrimMeshes = [];
    //var wallTrimMeshes = [[],[],[],[]];
    // var doorSpaces0 = [];
    // var doorSpaces1 = [];
    // var doorSpaces2 = [];
    // var doorSpaces3 = [];
    var leanTo = [];
    var leanToCorners = [
        [],
        [],
        [],
        []
    ];
    var fLeanToMesh = null;
    var rLeanToMesh = null;
    var bLeanToMesh = null;
    var lLeanToMesh = null;
    var leanToPosts = [
        [],
        [],
        [],
        []
    ];
    var engine = null;
    var scene = null;
    var sceneToRender = null;
    var uniCamera = null;
    var arcCamera = null;
    var zoomCamera = null;
    var createDefaultEngine = function() {
        return new BABYLON.Engine(canvas, true, {
            preserveDrawingBuffer: true,
            stencil: true,
            disableWebGL2Support: false
        });
    };

    BABYLON.PolygonMeshBuilder.prototype.wallBuilder = function(w0, w1) {
        var positions = [];
        var iuvs = [];
        var euvs = [];
        var icolors = [];
        var ecolors = [];
        var direction = w1.corner.subtract(w0.corner).normalize();
        var angle = Math.acos(direction.x);
        if (direction.z != 0) {
            angle *= direction.z / Math.abs(direction.z);
        }
        this._points.elements.forEach(function(p) {
            positions.push(p.x * Math.cos(angle) + w0.corner.x, p.y, p.x * Math.sin(angle) + w0.corner.z);
        });
        var indices = [];
        var res = earcut(this._epoints, this._eholes, 2);
        for (var i = res.length; i > 0; i--) {
            indices.push(res[i - 1]);
        };
        return {
            positions: positions,
            indices: indices
        };
    };

    var corner = function(x, y) {
        return new BABYLON.Vector3(x, 0, y);
    }

    var door = function(width, height, type, color) {
        console.log(width, height, type, color)
        this.width = width;
        this.height = height;
        this.left = 0;
        this.type = type;
        this.color = color;
    }

    var doorSpace = function(door, left) {
        this.door = door;
        this.left = left;
    }

    var windowObj = function(width, height) {
        this.width = width;
        this.height = height;
        this.left = 0;
        this.bottom = 0;
    }

    var windowSpace = function(window, left, top) {
        this.window = window;
        this.left = left;
        this.top = top;
    }

    var wall = function(corner, doorSpaces, windowSpaces) {
        this.corner = corner;
        this.doorSpaces = doorSpaces || [];
        this.windowSpaces = windowSpaces || [];
    }

    var leanTo = function(width, pitch, drop, cut1, cut2) {
        this.width = width;
        this.height = 0;
        this.pitch = pitch;
        this.drop = drop;
        this.cut1 = cut1;
        this.cut2 = cut2;
        this.wrapLeft = 0;
        this.wrapRight = 0;
    }


    var buildFromPlan = function(walls, ply, height, options, scene, customMesh) {
        house = buildWall0(walls);
        house = buildWall1(walls);
        house = buildWall2(walls);
        house = buildWall3(walls);
        return house;
    }

    var buildWall0 = function(walls) {

        roofHeight = (roofPitch * 0.83333);

        //Polygon shape in XoZ plane
        const shape = [
            new BABYLON.Vector3(walls[0].corner.x, 0, walls[0].corner.z),
            new BABYLON.Vector3(walls[0].corner.x, 0, height),
            new BABYLON.Vector3(0, 0, height + roofHeight),
            new BABYLON.Vector3(walls[1].corner.x, 0, height),
            new BABYLON.Vector3(walls[1].corner.x, 0, walls[1].corner.z)
        ];
        //console.log(shape);

        //Holes in XoZ plane
        const holes = [];
        for (var ii = 0; ii < windowSpaces[0].length; ii++) {
            var ws = windowSpaces[0][ii]
            //console.log(ws);
            var wSpace = [
                new BABYLON.Vector3(ws.left + walls[0].corner.x, 0, height - ws.top),
                new BABYLON.Vector3(ws.left + walls[0].corner.x, 0, height - ws.top - ws.window.height),
                new BABYLON.Vector3(ws.left + walls[0].corner.x + ws.window.width, 0, height - ws.top - ws
                    .window.height),
                new BABYLON.Vector3(ws.left + walls[0].corner.x + ws.window.width, 0, height - ws.top)
            ];
            //console.log(wSpace);
            holes.push(wSpace);
        }
        console.log(holes);
        for (var ii = 0; ii < doorSpaces[0].length; ii++) {
            var ds = doorSpaces[0][ii]
            var dSpace = [
                new BABYLON.Vector3(ds.left + walls[0].corner.x, 0, 0),
                new BABYLON.Vector3(ds.left + walls[0].corner.x, 0, ds.door.height),
                new BABYLON.Vector3(ds.left + walls[0].corner.x + ds.door.width, 0, ds.door.height),
                new BABYLON.Vector3(ds.left + walls[0].corner.x + ds.door.width, 0, 0)
            ];
            holes.push(dSpace);
        }

        const polygon = BABYLON.MeshBuilder.CreatePolygon("polygon", {
            shape: shape,
            holes: holes,
            sideOrientation: BABYLON.Mesh.DOUBLESIDE
        });
        console.log(holes);




        var redMaterial = new BABYLON.StandardMaterial("redMaterial", scene);
        redMaterial.diffuseColor = new BABYLON.Color3(1, 0, 0); // Set color to red




        polygon.rotation.x = 4.71239;
        polygon.material = new BABYLON.StandardMaterial("", scene);
        polygon.material.bumpTexture = new BABYLON.Texture("wall_panel_wide.png", scene);
        polygon.material.invertNormalMapX = true;
        polygon.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);
        wallMeshes.push(polygon);

        polygon1 = polygon.clone();
        polygon1.position.z = 0.025;
        polygon1.material = new BABYLON.StandardMaterial("", scene);
        polygon1.material.bumpTexture = new BABYLON.Texture("wall_panel_wide.png", scene);
        polygon1.material.invertNormalMapX = true;
        polygon1.material.diffuseColor = new BABYLON.Color3(1, 0, 0);
        wallMeshes.push(polygon1);
        return polygon;
    }

    var buildWall1 = function(walls) {

        roofHeight = (roofPitch * 0.83333);

        //Polygon shape in XoZ plane
        const shape = [
            new BABYLON.Vector3(walls[0].corner.x, 0, walls[0].corner.z),
            new BABYLON.Vector3(walls[0].corner.x, 0, height),
            new BABYLON.Vector3(walls[0].corner.x + length, 0, height),
            new BABYLON.Vector3(walls[0].corner.x + length, 0, walls[0].corner.z)
        ];
        //console.log(shape);

        //Holes in XoZ plane
        const holes = [];
        for (var ii = 0; ii < windowSpaces[1].length; ii++) {
            var ws = windowSpaces[1][ii]
            //console.log(ws);
            var wSpace = [
                new BABYLON.Vector3(ws.left + walls[0].corner.x, 0, height - ws.top),
                new BABYLON.Vector3(ws.left + walls[0].corner.x, 0, height - ws.top - ws.window.height),
                new BABYLON.Vector3(ws.left + walls[0].corner.x + ws.window.width, 0, height - ws.top - ws
                    .window.height),
                new BABYLON.Vector3(ws.left + walls[0].corner.x + ws.window.width, 0, height - ws.top)
            ];
            //console.log(wSpace);
            holes.push(wSpace);
        }

        for (var ii = 0; ii < doorSpaces[1].length; ii++) {
            var ds = doorSpaces[1][ii]
            //console.log(ds);
            var dSpace = [
                new BABYLON.Vector3(ds.left + walls[0].corner.x, 0, 0),
                new BABYLON.Vector3(ds.left + walls[0].corner.x, 0, ds.door.height),
                new BABYLON.Vector3(ds.left + walls[0].corner.x + ds.door.width, 0, ds.door.height),
                new BABYLON.Vector3(ds.left + walls[0].corner.x + ds.door.width, 0, 0)
            ];
            //console.log(dSpace);
            holes.push(dSpace);
        }

        const polygon = BABYLON.MeshBuilder.CreatePolygon("polygon", {
            shape: shape,
            holes: holes,
            sideOrientation: BABYLON.Mesh.DOUBLESIDE
        });

        polygon.rotation.x = 4.71239;
        polygon.rotation.y = 4.71239;
        polygon.position.x = width / 2;
        //polygon.position.z = 10+((length-20)/2)+((width-20)/2);
        polygon.position.z = 10 + ((width - 20) / 2);
        polygon.material = new BABYLON.StandardMaterial("", scene);
        polygon.material.bumpTexture = new BABYLON.Texture("wall_panel_wide.png", scene);
        polygon.material.invertNormalMapX = true;
        polygon.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);
        wallMeshes.push(polygon);

        polygon1 = polygon.clone();
        polygon1.position.x = width / 2 - 0.025;
        polygon1.material = new BABYLON.StandardMaterial("", scene);
        polygon1.material.bumpTexture = new BABYLON.Texture("wall_panel_wide.png", scene);
        polygon1.material.invertNormalMapX = true;
        polygon1.material.diffuseColor = new BABYLON.Color3(1, 1, 1);
        wallMeshes.push(polygon1);

        return polygon;
    }

    var buildWall2 = function(walls) {

        roofHeight = (roofPitch * 0.83333);

        //Polygon shape in XoZ plane
        const shape = [
            new BABYLON.Vector3(walls[0].corner.x, 0, walls[0].corner.z),
            new BABYLON.Vector3(walls[0].corner.x, 0, height),
            new BABYLON.Vector3(0, 0, height + roofHeight),
            new BABYLON.Vector3(walls[1].corner.x, 0, height),
            new BABYLON.Vector3(walls[1].corner.x, 0, walls[1].corner.z)
        ];
        //console.log(shape);

        //Holes in XoZ plane
        const holes = [];
        for (var ii = 0; ii < windowSpaces[2].length; ii++) {
            var ws = windowSpaces[2][ii]
            //console.log(ws);
            var wSpace = [
                new BABYLON.Vector3(ws.left + walls[0].corner.x, 0, height - ws.top),
                new BABYLON.Vector3(ws.left + walls[0].corner.x, 0, height - ws.top - ws.window.height),
                new BABYLON.Vector3(ws.left + walls[0].corner.x + ws.window.width, 0, height - ws.top - ws
                    .window.height),
                new BABYLON.Vector3(ws.left + walls[0].corner.x + ws.window.width, 0, height - ws.top)
            ];
            //console.log(wSpace);
            holes.push(wSpace);
        }

        for (var ii = 0; ii < doorSpaces[2].length; ii++) {
            var ds = doorSpaces[2][ii]
            //console.log(ds);
            var dSpace = [
                new BABYLON.Vector3(ds.left + walls[0].corner.x, 0, 0),
                new BABYLON.Vector3(ds.left + walls[0].corner.x, 0, ds.door.height),
                new BABYLON.Vector3(ds.left + walls[0].corner.x + ds.door.width, 0, ds.door.height),
                new BABYLON.Vector3(ds.left + walls[0].corner.x + ds.door.width, 0, 0)
            ];
            console.log(dSpace);
            holes.push(dSpace);
        }

        const polygon = BABYLON.MeshBuilder.CreatePolygon("polygon", {
            shape: shape,
            holes: holes,
            sideOrientation: BABYLON.Mesh.DOUBLESIDE
        });
        console.log(holes)
        polygon.rotation.x = 4.71239;
        polygon.rotation.y = 3.14159;
        polygon.position.z = length;
        polygon.material = new BABYLON.StandardMaterial("", scene);
        polygon.material.bumpTexture = new BABYLON.Texture("wall_panel_wide.png", scene);
        polygon.material.invertNormalMapX = true;
        polygon.material.diffuseColor = new BABYLON.Color3(1, 0, 0);
        polygon.material.emissiveColor = new BABYLON.Color3(1, 0, 0);
        polygon.material.ambientColor = new BABYLON.Color3(1, 0, 0);
        wallMeshes.push(polygon);

        polygon1 = polygon.clone();
        polygon1.position.z = length - 0.025;
        polygon1.material = new BABYLON.StandardMaterial("", scene);
        polygon1.material.bumpTexture = new BABYLON.Texture("wall_panel_wide.png", scene);
        polygon1.material.invertNormalMapX = true;
        polygon1.material.diffuseColor = new BABYLON.Color3(1, 1, 1);
        wallMeshes.push(polygon1);



        return polygon;
    }

    var buildWall3 = function(walls) {

        roofHeight = (roofPitch * 0.83333);

        //Polygon shape in XoZ plane
        const shape = [
            new BABYLON.Vector3(walls[0].corner.x, 0, walls[0].corner.z),
            new BABYLON.Vector3(walls[0].corner.x, 0, height),
            new BABYLON.Vector3(walls[0].corner.x + length, 0, height),
            new BABYLON.Vector3(walls[0].corner.x + length, 0, walls[0].corner.z)
        ];
        //console.log(shape);

        //Holes in XoZ plane
        const holes = [];
        for (var ii = 0; ii < windowSpaces[3].length; ii++) {
            var ws = windowSpaces[3][ii]
            //console.log(ws);
            var wSpace = [
                new BABYLON.Vector3(ws.left + walls[0].corner.x, 0, height - ws.top),
                new BABYLON.Vector3(ws.left + walls[0].corner.x, 0, height - ws.top - ws.window.height),
                new BABYLON.Vector3(ws.left + walls[0].corner.x + ws.window.width, 0, height - ws.top - ws
                    .window.height),
                new BABYLON.Vector3(ws.left + walls[0].corner.x + ws.window.width, 0, height - ws.top)
            ];
            //console.log(wSpace);
            holes.push(wSpace);
        }

        for (var ii = 0; ii < doorSpaces[3].length; ii++) {
            var ds = doorSpaces[3][ii]
            //console.log(ds);
            var dSpace = [
                new BABYLON.Vector3(ds.left + walls[0].corner.x, 0, 0),
                new BABYLON.Vector3(ds.left + walls[0].corner.x, 0, ds.door.height),
                new BABYLON.Vector3(ds.left + walls[0].corner.x + ds.door.width, 0, ds.door.height),
                new BABYLON.Vector3(ds.left + walls[0].corner.x + ds.door.width, 0, 0)
            ];
            //console.log(dSpace);
            holes.push(dSpace);
        }

        const polygon = BABYLON.MeshBuilder.CreatePolygon("polygon", {
            shape: shape,
            holes: holes,
            sideOrientation: BABYLON.Mesh.DOUBLESIDE
        });

        polygon.rotation.x = 4.71239;
        polygon.rotation.y = 1.5708;
        polygon.position.x = 0 - width / 2;
        polygon.position.z = 10 - ((width - 20) / 2) + ((length - 20));
        polygon.material = new BABYLON.StandardMaterial("", scene);
        polygon.material.bumpTexture = new BABYLON.Texture("wall_panel_wide.png", scene);
        polygon.material.invertNormalMapX = true;
        polygon.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);
        wallMeshes.push(polygon);

        polygon1 = polygon.clone();
        polygon1.position.x = 0 - width / 2 + 0.025;
        polygon1.material = new BABYLON.StandardMaterial("", scene);
        polygon1.material.bumpTexture = new BABYLON.Texture("wall_panel_wide.png", scene);
        polygon1.material.invertNormalMapX = true;
        polygon1.material.diffuseColor = new BABYLON.Color3(1, 1, 1);
        wallMeshes.push(polygon1);

        return polygon;
    }


    var OLDbuildFromPlan = function(walls, ply, height, options, scene, customMesh) {

        //Arrays for vertex positions and indices
        var positions = [];
        var indices = [];
        var uvs = [];
        var colors = [];

        var interiorUV = options.interiorUV || new BABYLON.Vector4(0, 0, 1, 1);
        var exteriorUV = options.exteriorUV || new BABYLON.Vector4(0, 0, 1, 1);

        var interiorColor = options.interiorColor || new BABYLON.Color4(1, 1, 1, 1);
        var exteriorColor = options.exteriorColor || new BABYLON.Color4(1, 1, 1, 1);
        var interior = options.interior || false;
        if (!interior) {
            walls.push(walls[0]);
        }

        var interiorIndex;

        //Arrays to hold wall corner data 
        var innerBaseCorners = [];
        var outerBaseCorners = [];
        var innerTopCorners = [];
        var outerTopCorners = [];
        var innerDoorCorners = [];
        var outerDoorCorners = [];
        var innerWindowCorners = [];
        var outerWindowCorners = [];

        var angle = 0;
        var direction = 0;

        var line = BABYLON.Vector3.Zero();
        var nextLine = BABYLON.Vector3.Zero();

        var nbWalls = walls.length;
        if (nbWalls === 2) {
            walls[1].corner.subtractToRef(walls[0].corner, line);
            lineNormal = new BABYLON.Vector3(line.z, 0, -1 * line.x).normalize();
            line.normalize();
            innerBaseCorners[0] = walls[0].corner;
            outerBaseCorners[0] = walls[0].corner.add(lineNormal.scale(ply));
            innerBaseCorners[1] = walls[1].corner;
            outerBaseCorners[1] = walls[1].corner.add(lineNormal.scale(ply));
        } else if (nbWalls > 2) {
            for (var w = 0; w < nbWalls - 1; w++) {
                walls[w + 1].corner.subtractToRef(walls[w].corner, nextLine);
                angle = Math.PI - Math.acos(BABYLON.Vector3.Dot(line, nextLine) / (line.length() * nextLine
                    .length()));
                direction = BABYLON.Vector3.Cross(nextLine, line).normalize().y;
                lineNormal = new BABYLON.Vector3(line.z, 0, -1 * line.x).normalize();
                line.normalize();
                innerBaseCorners[w] = walls[w].corner
                outerBaseCorners[w] = walls[w].corner.add(lineNormal.scale(ply)).add(line.scale(direction * ply /
                    Math.tan(angle / 2)));
                line = nextLine.clone();
            }
            if (interior) {
                lineNormal = new BABYLON.Vector3(line.z, 0, -1 * line.x).normalize();
                line.normalize();
                innerBaseCorners[nbWalls - 1] = walls[nbWalls - 1].corner
                outerBaseCorners[nbWalls - 1] = walls[nbWalls - 1].corner.add(lineNormal.scale(ply));
                walls[1].corner.subtractToRef(walls[0].corner, line);
                lineNormal = new BABYLON.Vector3(line.z, 0, -1 * line.x).normalize();
                line.normalize();
                innerBaseCorners[0] = walls[0].corner;
                outerBaseCorners[0] = walls[0].corner.add(lineNormal.scale(ply));
            } else {
                walls[1].corner.subtractToRef(walls[0].corner, nextLine);
                angle = Math.PI - Math.acos(BABYLON.Vector3.Dot(line, nextLine) / (line.length() * nextLine
                    .length()));
                direction = BABYLON.Vector3.Cross(nextLine, line).normalize().y;
                lineNormal = new BABYLON.Vector3(line.z, 0, -1 * line.x).normalize();
                line.normalize();
                innerBaseCorners[0] = walls[0].corner
                outerBaseCorners[0] = walls[0].corner.add(lineNormal.scale(ply)).add(line.scale(direction * ply /
                    Math.tan(angle / 2)));
                innerBaseCorners[nbWalls - 1] = innerBaseCorners[0];
                outerBaseCorners[nbWalls - 1] = outerBaseCorners[0]

            }
        }

        // inner and outer top corners
        for (var w = 0; w < nbWalls; w++) {
            innerTopCorners.push(new BABYLON.Vector3(innerBaseCorners[w].x, height, innerBaseCorners[w].z));
            outerTopCorners.push(new BABYLON.Vector3(outerBaseCorners[w].x, height, outerBaseCorners[w].z));
        }

        var maxL = 0;
        for (w = 0; w < nbWalls - 1; w++) {
            maxL = Math.max(innerBaseCorners[w + 1].subtract(innerBaseCorners[w]).length(), maxL);
        }

        var maxH = height; // for when gables introduced

        /******House Mesh Construction********/

        // Wall Construction
        var polygonCorners;
        var polygonTriangulation;
        var wallData;
        var wallDirection = BABYLON.Vector3.Zero();
        var wallNormal = BABYLON.Vector3.Zero();
        var wallLength;
        var exteriorWallLength;
        var doorData;
        var windowData;
        var uvx, uvy;
        var wallDiff;

        for (var w = 0; w < nbWalls - 1; w++) {
            walls[w + 1].corner.subtractToRef(walls[w].corner, wallDirection);
            wallLength = wallDirection.length();
            wallDirection.normalize();
            wallNormal.x = wallDirection.z;
            wallNormal.z = -1 * wallDirection.x;
            exteriorWallLength = outerBaseCorners[w + 1].subtract(outerBaseCorners[w]).length();
            wallDiff = exteriorWallLength - wallLength;
            var gableHeight = 0;

            //doors
            if (walls[w].doorSpaces) {
                walls[w].doorSpaces.sort(compareLeft);
            }
            var doors = walls[w].doorSpaces.length;

            //Construct INNER wall polygon starting from (0, 0) using wall length and height and door data
            polygonCorners = [];
            polygonCorners.push(new BABYLON.Vector2(0, 0));

            for (var d = 0; d < doors; d++) {
                polygonCorners.push(new BABYLON.Vector2(walls[w].doorSpaces[d].left, 0));
                polygonCorners.push(new BABYLON.Vector2(walls[w].doorSpaces[d].left, walls[w].doorSpaces[d].door
                    .height));
                polygonCorners.push(new BABYLON.Vector2(walls[w].doorSpaces[d].left + walls[w].doorSpaces[d].door
                    .width, walls[w].doorSpaces[d].door.height));
                polygonCorners.push(new BABYLON.Vector2(walls[w].doorSpaces[d].left + walls[w].doorSpaces[d].door
                    .width, 0));
            }

            polygonCorners.push(new BABYLON.Vector2(wallLength, 0));
            polygonCorners.push(new BABYLON.Vector2(wallLength, height));
            polygonCorners.push(new BABYLON.Vector2(0, height));

            //Construct triangulation of polygon using its corners
            polygonTriangulation = new BABYLON.PolygonMeshBuilder("", polygonCorners, scene);

            //windows
            //Construct holes and add to polygon from window data			
            var windows = walls[w].windowSpaces.length;
            var holes = [];
            for (var ws = 0; ws < windows; ws++) {
                var holeData = [];
                holeData.push(new BABYLON.Vector2(walls[w].windowSpaces[ws].left, height - walls[w].windowSpaces[ws]
                    .top - walls[w].windowSpaces[ws].window.height));
                holeData.push(new BABYLON.Vector2(walls[w].windowSpaces[ws].left + walls[w].windowSpaces[ws].window
                    .width, height - walls[w].windowSpaces[ws].top - walls[w].windowSpaces[ws].window.height
                ));
                holeData.push(new BABYLON.Vector2(walls[w].windowSpaces[ws].left + walls[w].windowSpaces[ws].window
                    .width, height - walls[w].windowSpaces[ws].top));
                holeData.push(new BABYLON.Vector2(walls[w].windowSpaces[ws].left, height - walls[w].windowSpaces[ws]
                    .top));
                holes.push(holeData);
            }

            for (var h = 0; h < holes.length; h++) {
                polygonTriangulation.addHole(holes[h]);
            }


            // wallBuilder produces wall vertex positions array and indices using the current and next wall to rotate and translate vertex positions to correct place
            wallData = polygonTriangulation.wallBuilder(walls[w], walls[w + 1]);

            nbIndices = positions.length / 3; // current number of indices

            polygonTriangulation._points.elements.forEach(function(p) {
                uvx = interiorUV.x + p.x * (interiorUV.z - interiorUV.x) / maxL;
                uvy = interiorUV.y + p.y * (interiorUV.w - interiorUV.y) / height;
                uvs.push(uvx, uvy);
                colors.push(interiorColor.r, interiorColor.g, interiorColor.b, interiorColor.a);
            });

            //Add inner wall positions (repeated for flat shaded mesh)
            positions = positions.concat(wallData.positions);

            interiorIndex = positions.length / 3;

            indices = indices.concat(wallData.indices.map(function(idx) {
                return idx + nbIndices;
            }));

            //wallData has format for inner wall [base left, 0 or more doors, base right, top right, top left, windows]
            //extract door and wall data

            windowData = wallData.positions.slice(12 * (doors +
                1)); //4 entries per door + 4 entries for wall corners, each entry has 3 data points
            doorData = wallData.positions.slice(3, 3 * (4 * doors + 1));

            //For each inner door save corner as an array of four Vector3s, base left, top left, top right, base right
            //Extend door data outwards by ply and save outer door corners 		
            var doorCornersIn = [];
            var doorCornersOut = [];
            for (var p = 0; p < doorData.length / 12; p++) {
                var doorsIn = [];
                var doorsOut = [];
                for (var d = 0; d < 4; d++) {
                    doorsIn.push(new BABYLON.Vector3(doorData[3 * d + 12 * p], doorData[3 * d + 12 * p + 1],
                        doorData[3 * d + 12 * p + 2]));
                    doorData[3 * d + 12 * p] += ply * wallNormal.x;
                    doorData[3 * d + 12 * p + 2] += ply * wallNormal.z;
                    doorsOut.push(new BABYLON.Vector3(doorData[3 * d + 12 * p], doorData[3 * d + 12 * p + 1],
                        doorData[3 * d + 12 * p + 2]));
                }
                doorCornersIn.push(doorsIn);
                doorCornersOut.push(doorsOut);
            }
            innerDoorCorners.push(doorCornersIn);
            outerDoorCorners.push(doorCornersOut);

            //For each inner window save corner as an array of four Vector3s, base left, top left, top right, base right
            //Extend window data outwards by ply and save outer window corners 		
            var windowCornersIn = [];
            var windowCornersOut = [];
            for (var p = 0; p < windowData.length / 12; p++) {
                var windowsIn = [];
                var windowsOut = [];
                for (var d = 0; d < 4; d++) {
                    windowsIn.push(new BABYLON.Vector3(windowData[3 * d + 12 * p], windowData[3 * d + 12 * p + 1],
                        windowData[3 * d + 12 * p + 2]));
                    windowData[3 * d + 12 * p] += ply * wallNormal.x;
                    windowData[3 * d + 12 * p + 2] += ply * wallNormal.z;
                    windowsOut.push(new BABYLON.Vector3(windowData[3 * d + 12 * p], windowData[3 * d + 12 * p + 1],
                        windowData[3 * d + 12 * p + 2]));
                }
                windowCornersIn.push(windowsIn);
                windowCornersOut.push(windowsOut);
            }
            innerWindowCorners.push(windowCornersIn);
            outerWindowCorners.push(windowCornersOut);

            //Construct OUTER wall facet positions from inner wall 
            //Add outer wall corner positions back to wallData positions
            wallData.positions = [];

            wallData.positions.push(outerBaseCorners[w].x, outerBaseCorners[w].y, outerBaseCorners[w].z);
            wallData.positions = wallData.positions.concat(doorData);
            wallData.positions.push(outerBaseCorners[w + 1].x, outerBaseCorners[w + 1].y, outerBaseCorners[(w + 1) %
                nbWalls].z);
            wallData.positions.push(outerTopCorners[w + 1].x, outerTopCorners[w + 1].y, outerTopCorners[(w + 1) %
                nbWalls].z);
            wallData.positions.push(outerTopCorners[w].x, outerTopCorners[w].y, outerTopCorners[w].z);
            wallData.positions = wallData.positions.concat(windowData);

            //Calulate exterior wall uvs
            polygonTriangulation._points.elements.forEach(function(p) {
                if (p.x == 0) {
                    uvx = exteriorUV.x;
                } else if (wallLength - p.x < 0.000001) {
                    uvx = exteriorUV.x + (wallDiff + p.x) * (exteriorUV.z - exteriorUV.x) / (maxL +
                        wallDiff)
                } else {
                    uvx = exteriorUV.x + (0.5 * wallDiff + p.x) * (exteriorUV.z - exteriorUV.x) / (maxL +
                        wallDiff);
                }
                uvy = exteriorUV.y + p.y * (exteriorUV.w - exteriorUV.y) / height;
                uvs.push(uvx, uvy);
            });

            nbIndices = positions.length / 3; // current number of indices

            //Add outer wall positions, uvs and colors (repeated for flat shaded mesh)
            positions = positions.concat(wallData.positions);


            //Reverse indices for correct normals
            wallData.indices.reverse();

            indices = indices.concat(wallData.indices.map(function(idx) {
                return idx + nbIndices;
            }));

            //Construct facets for base and door top and door sides, repeating positions for flatshaded mesh
            var doorsRemaining = doors;
            var doorNb = 0;

            if (doorsRemaining > 0) {
                //base
                nbIndices = positions.length / 3; // current number of indices

                positions.push(innerBaseCorners[w].x, innerBaseCorners[w].y, innerBaseCorners[w].z); //tl
                positions.push(outerBaseCorners[w].x, outerBaseCorners[w].y, outerBaseCorners[w].z); //bl
                positions.push(innerDoorCorners[w][doorNb][0].x, innerDoorCorners[w][doorNb][0].y, innerDoorCorners[
                    w][doorNb][0].z); //tr
                positions.push(outerDoorCorners[w][doorNb][0].x, outerDoorCorners[w][doorNb][0].y, outerDoorCorners[
                    w][doorNb][0].z); //br

                uvs.push(exteriorUV.x, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top Left
                uvs.push(exteriorUV.x, exteriorUV.y); //base Left				
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * walls[w].doorSpaces[doorNb].left / maxL,
                    exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top right
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * walls[w].doorSpaces[doorNb].left / maxL,
                    exteriorUV.y); //base right

                indices.push(nbIndices, nbIndices + 2, nbIndices + 3, nbIndices + 3, nbIndices + 1, nbIndices);

                //left side
                nbIndices = positions.length / 3; // current number of indices

                positions.push(innerDoorCorners[w][doorNb][0].x, innerDoorCorners[w][doorNb][0].y, innerDoorCorners[
                    w][doorNb][0].z); //br
                positions.push(innerDoorCorners[w][doorNb][1].x, innerDoorCorners[w][doorNb][1].y, innerDoorCorners[
                    w][doorNb][1].z); //tr
                positions.push(outerDoorCorners[w][doorNb][0].x, outerDoorCorners[w][doorNb][0].y, outerDoorCorners[
                    w][doorNb][0].z); //bl
                positions.push(outerDoorCorners[w][doorNb][1].x, outerDoorCorners[w][doorNb][1].y, outerDoorCorners[
                    w][doorNb][1].z); //tl

                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * ply / maxL, exteriorUV.y); //base right
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * ply / maxL, exteriorUV.y + (exteriorUV.w -
                    exteriorUV.y) * walls[w].doorSpaces[doorNb].door.height / maxH); //top right
                uvs.push(exteriorUV.x, exteriorUV.y); //base Left
                uvs.push(exteriorUV.x, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * walls[w].doorSpaces[doorNb]
                    .door.height / maxH); //top Left

                indices.push(nbIndices, nbIndices + 1, nbIndices + 3, nbIndices, nbIndices + 3, nbIndices + 2);

                //top
                nbIndices = positions.length / 3; // current number of indices

                positions.push(innerDoorCorners[w][doorNb][1].x, innerDoorCorners[w][doorNb][1].y, innerDoorCorners[
                    w][doorNb][1].z); //bl
                positions.push(innerDoorCorners[w][doorNb][2].x, innerDoorCorners[w][doorNb][2].y, innerDoorCorners[
                    w][doorNb][2].z); //br
                positions.push(outerDoorCorners[w][doorNb][1].x, outerDoorCorners[w][doorNb][1].y, outerDoorCorners[
                    w][doorNb][1].z); //tl
                positions.push(outerDoorCorners[w][doorNb][2].x, outerDoorCorners[w][doorNb][2].y, outerDoorCorners[
                    w][doorNb][2].z); //tr

                uvs.push(exteriorUV.x, exteriorUV.y); //base Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * walls[w].doorSpaces[doorNb].door.width /
                    maxL, exteriorUV.y); //base right
                uvs.push(exteriorUV.x, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * walls[w].doorSpaces[doorNb].door.width /
                    maxL, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top right

                indices.push(nbIndices + 2, nbIndices + 1, nbIndices + 3, nbIndices + 2, nbIndices, nbIndices + 1);

                //right side
                nbIndices = positions.length / 3; // current number of indices

                positions.push(innerDoorCorners[w][doorNb][2].x, innerDoorCorners[w][doorNb][2].y, innerDoorCorners[
                    w][doorNb][2].z); //tl
                positions.push(innerDoorCorners[w][doorNb][3].x, innerDoorCorners[w][doorNb][3].y, innerDoorCorners[
                    w][doorNb][3].z); //bl
                positions.push(outerDoorCorners[w][doorNb][2].x, outerDoorCorners[w][doorNb][2].y, outerDoorCorners[
                    w][doorNb][2].z); //tr
                positions.push(outerDoorCorners[w][doorNb][3].x, outerDoorCorners[w][doorNb][3].y, outerDoorCorners[
                    w][doorNb][3].z); //br

                uvs.push(exteriorUV.x, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * walls[w].doorSpaces[doorNb]
                    .door.height / maxH); //top Left
                uvs.push(exteriorUV.x, exteriorUV.y); //base Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * ply / maxL, exteriorUV.y + (exteriorUV.w -
                    exteriorUV.y) * walls[w].doorSpaces[doorNb].door.height / maxH); //top right
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * ply / maxL, exteriorUV.y); //base right

                indices.push(nbIndices, nbIndices + 3, nbIndices + 2, nbIndices, nbIndices + 1, nbIndices + 3);
            }
            doorsRemaining--
            doorNb++

            while (doorsRemaining > 0) {

                //base
                nbIndices = positions.length / 3; // current number of indices

                positions.push(innerDoorCorners[w][doorNb - 1][3].x, innerDoorCorners[w][doorNb - 1][3].y,
                    innerDoorCorners[w][doorNb - 1][3].z); //bl
                positions.push(innerDoorCorners[w][doorNb][0].x, innerDoorCorners[w][doorNb][0].y, innerDoorCorners[
                    w][doorNb][0].z); //br
                positions.push(outerDoorCorners[w][doorNb - 1][3].x, outerDoorCorners[w][doorNb - 1][3].y,
                    outerDoorCorners[w][doorNb - 1][3].z); //tl
                positions.push(outerDoorCorners[w][doorNb][0].x, outerDoorCorners[w][doorNb][0].y, outerDoorCorners[
                    w][doorNb][0].z); //tr

                uvs.push(exteriorUV.x, exteriorUV.y); //base Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * (walls[w].doorSpaces[doorNb].left - (walls[
                        w].doorSpaces[doorNb - 1].left + walls[w].doorSpaces[doorNb - 1].door.width)) / maxL /
                    maxL, exteriorUV.y); //base right
                uvs.push(exteriorUV.x, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * (walls[w].doorSpaces[doorNb].left - (walls[
                        w].doorSpaces[doorNb - 1].left + walls[w].doorSpaces[doorNb - 1].door.width)) / maxL,
                    exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top right

                indices.push(nbIndices, nbIndices + 1, nbIndices + 3, nbIndices + 3, nbIndices + 2, nbIndices);

                //left side
                nbIndices = positions.length / 3; // current number of indices

                positions.push(innerDoorCorners[w][doorNb][0].x, innerDoorCorners[w][doorNb][0].y, innerDoorCorners[
                    w][doorNb][0].z); //br
                positions.push(innerDoorCorners[w][doorNb][1].x, innerDoorCorners[w][doorNb][1].y, innerDoorCorners[
                    w][doorNb][1].z); //tr
                positions.push(outerDoorCorners[w][doorNb][0].x, outerDoorCorners[w][doorNb][0].y, outerDoorCorners[
                    w][doorNb][0].z); //bl
                positions.push(outerDoorCorners[w][doorNb][1].x, outerDoorCorners[w][doorNb][1].y, outerDoorCorners[
                    w][doorNb][1].z); //tl

                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * ply / maxL, exteriorUV.y); //base right
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * ply / maxL, exteriorUV.y + (exteriorUV.w -
                    exteriorUV.y) * walls[w].doorSpaces[doorNb].door.height / maxH); //top right
                uvs.push(exteriorUV.x, exteriorUV.y); //base Left
                uvs.push(exteriorUV.x, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * walls[w].doorSpaces[doorNb]
                    .door.height / maxH); //top Left

                indices.push(nbIndices, nbIndices + 1, nbIndices + 3, nbIndices, nbIndices + 3, nbIndices + 2);

                //top
                nbIndices = positions.length / 3; // current number of indices

                positions.push(innerDoorCorners[w][doorNb][1].x, innerDoorCorners[w][doorNb][1].y, innerDoorCorners[
                    w][doorNb][1].z); //bl
                positions.push(innerDoorCorners[w][doorNb][2].x, innerDoorCorners[w][doorNb][2].y, innerDoorCorners[
                    w][doorNb][2].z); //br
                positions.push(outerDoorCorners[w][doorNb][1].x, outerDoorCorners[w][doorNb][1].y, outerDoorCorners[
                    w][doorNb][1].z); //tl
                positions.push(outerDoorCorners[w][doorNb][2].x, outerDoorCorners[w][doorNb][2].y, outerDoorCorners[
                    w][doorNb][2].z); //tr

                uvs.push(exteriorUV.x, exteriorUV.y); //base Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * walls[w].doorSpaces[doorNb].door.width /
                    maxL, exteriorUV.y); //base right
                uvs.push(exteriorUV.x, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * walls[w].doorSpaces[doorNb].door.width /
                    maxL, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top right

                indices.push(nbIndices + 2, nbIndices + 1, nbIndices + 3, nbIndices + 2, nbIndices, nbIndices + 1);

                //right side
                nbIndices = positions.length / 3; // current number of indices

                positions.push(innerDoorCorners[w][doorNb][2].x, innerDoorCorners[w][doorNb][2].y, innerDoorCorners[
                    w][doorNb][2].z); //tl
                positions.push(innerDoorCorners[w][doorNb][3].x, innerDoorCorners[w][doorNb][3].y, innerDoorCorners[
                    w][doorNb][3].z); //bl
                positions.push(outerDoorCorners[w][doorNb][2].x, outerDoorCorners[w][doorNb][2].y, outerDoorCorners[
                    w][doorNb][2].z); //tr
                positions.push(outerDoorCorners[w][doorNb][3].x, outerDoorCorners[w][doorNb][3].y, outerDoorCorners[
                    w][doorNb][3].z); //br

                uvs.push(exteriorUV.x, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * walls[w].doorSpaces[doorNb]
                    .door.height / maxH); //top Left
                uvs.push(exteriorUV.x, exteriorUV.y); //base Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * ply / maxL, exteriorUV.y + (exteriorUV.w -
                    exteriorUV.y) * walls[w].doorSpaces[doorNb].door.height / maxH); //top right
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * ply / maxL, exteriorUV.y); //base right

                indices.push(nbIndices, nbIndices + 3, nbIndices + 2, nbIndices, nbIndices + 1, nbIndices + 3);

                doorsRemaining--
                doorNb++

            }

            doorNb--;
            nbIndices = positions.length / 3; // current number of indices

            //final base
            if (doors > 0) {
                positions.push(innerDoorCorners[w][doorNb][3].x, innerDoorCorners[w][doorNb][3].y, innerDoorCorners[
                    w][doorNb][3].z); //bl
                positions.push(innerBaseCorners[w + 1].x, innerBaseCorners[w + 1].y, innerBaseCorners[w + 1]
                    .z); //br
                positions.push(outerDoorCorners[w][doorNb][3].x, outerDoorCorners[w][doorNb][3].y, outerDoorCorners[
                    w][doorNb][3].z); //tl
                positions.push(outerBaseCorners[w + 1].x, outerBaseCorners[w + 1].y, outerBaseCorners[w + 1]
                    .z); //tr

                uvs.push(exteriorUV.x, exteriorUV.y); //base Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * (wallLength - (walls[w].doorSpaces[doorNb]
                    .left + walls[w].doorSpaces[doorNb].door.width)) / maxL, exteriorUV.y); //base right
                uvs.push(exteriorUV.x, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * (wallLength - (walls[w].doorSpaces[doorNb]
                    .left + walls[w].doorSpaces[doorNb].door.width)) / maxL, exteriorUV.y + (exteriorUV.w -
                    exteriorUV.y) * ply / maxH); //top right

            } else {
                positions.push(innerBaseCorners[w].x, innerBaseCorners[w].y, innerBaseCorners[w].z); //bl
                positions.push(innerBaseCorners[w + 1].x, innerBaseCorners[w + 1].y, innerBaseCorners[w + 1]
                    .z); //br
                positions.push(outerBaseCorners[w].x, outerBaseCorners[w].y, outerBaseCorners[w].z); //tl
                positions.push(outerBaseCorners[w + 1].x, outerBaseCorners[w + 1].y, outerBaseCorners[w + 1]
                    .z); //tr

                uvs.push(exteriorUV.x, exteriorUV.y); //base Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * wallLength / maxL, exteriorUV
                    .y); //base right
                uvs.push(exteriorUV.x, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * wallLength / maxL, exteriorUV.y + (
                    exteriorUV.w - exteriorUV.y) * ply / maxH); //top right

            }
            indices.push(nbIndices, nbIndices + 1, nbIndices + 3, nbIndices + 3, nbIndices + 2, nbIndices);

            //Construct facets for window base, top and sides, repeating positions for flatshaded mesh
            for (ww = 0; ww < innerWindowCorners[w].length; ww++) {
                //left side
                nbIndices = positions.length / 3; // current number of indices

                positions.push(innerWindowCorners[w][ww][3].x, innerWindowCorners[w][ww][3].y, innerWindowCorners[w]
                    [ww][3].z); //tr
                positions.push(innerWindowCorners[w][ww][0].x, innerWindowCorners[w][ww][0].y, innerWindowCorners[w]
                    [ww][0].z); //br
                positions.push(outerWindowCorners[w][ww][3].x, outerWindowCorners[w][ww][3].y, outerWindowCorners[w]
                    [ww][3].z); //tl
                positions.push(outerWindowCorners[w][ww][0].x, outerWindowCorners[w][ww][0].y, outerWindowCorners[w]
                    [ww][0].z); //bl

                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * ply / maxL, exteriorUV.y + (exteriorUV.w -
                    exteriorUV.y) * walls[w].windowSpaces[ww].window.height / maxH); //top right
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * ply / maxL, exteriorUV.y); //base right
                uvs.push(exteriorUV.x, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * walls[w].windowSpaces[ww]
                    .window.height / maxH); //top Left
                uvs.push(exteriorUV.x, exteriorUV.y); //base Left

                indices.push(nbIndices + 1, nbIndices, nbIndices + 3, nbIndices + 2, nbIndices + 3, nbIndices);

                //base
                nbIndices = positions.length / 3; // current number of indices

                positions.push(innerWindowCorners[w][ww][0].x, innerWindowCorners[w][ww][0].y, innerWindowCorners[w]
                    [ww][0].z); //tl
                positions.push(innerWindowCorners[w][ww][1].x, innerWindowCorners[w][ww][1].y, innerWindowCorners[w]
                    [ww][1].z); //tr
                positions.push(outerWindowCorners[w][ww][0].x, outerWindowCorners[w][ww][0].y, outerWindowCorners[w]
                    [ww][0].z); //bl
                positions.push(outerWindowCorners[w][ww][1].x, outerWindowCorners[w][ww][1].y, outerWindowCorners[w]
                    [ww][1].z); //br

                uvs.push(exteriorUV.x, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * walls[w].windowSpaces[ww].window.width /
                    maxL, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top right
                uvs.push(exteriorUV.x, exteriorUV.y); //base Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * walls[w].windowSpaces[ww].window.width /
                    maxL, exteriorUV.y); //base right

                indices.push(nbIndices + 1, nbIndices, nbIndices + 3, nbIndices + 3, nbIndices, nbIndices + 2);

                //right side
                nbIndices = positions.length / 3; // current number of indices

                positions.push(innerWindowCorners[w][ww][1].x, innerWindowCorners[w][ww][1].y, innerWindowCorners[w]
                    [ww][1].z); //bl
                positions.push(innerWindowCorners[w][ww][2].x, innerWindowCorners[w][ww][2].y, innerWindowCorners[w]
                    [ww][2].z); //tl
                positions.push(outerWindowCorners[w][ww][1].x, outerWindowCorners[w][ww][1].y, outerWindowCorners[w]
                    [ww][1].z); //br
                positions.push(outerWindowCorners[w][ww][2].x, outerWindowCorners[w][ww][2].y, outerWindowCorners[w]
                    [ww][2].z); //tr

                uvs.push(exteriorUV.x, exteriorUV.y); //base Left
                uvs.push(exteriorUV.x, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * walls[w].windowSpaces[ww]
                    .window.height / maxH); //top Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * ply / maxL, exteriorUV.y); //base right
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x), exteriorUV.y + (exteriorUV.w - exteriorUV
                    .y) * walls[w].windowSpaces[ww].window.height / maxH); //top right

                indices.push(nbIndices + 1, nbIndices + 2, nbIndices + 3, nbIndices, nbIndices + 2, nbIndices + 1);

                //top
                nbIndices = positions.length / 3; // current number of indices

                positions.push(innerWindowCorners[w][ww][2].x, innerWindowCorners[w][ww][2].y, innerWindowCorners[w]
                    [ww][2].z); //br
                positions.push(innerWindowCorners[w][ww][3].x, innerWindowCorners[w][ww][3].y, innerWindowCorners[w]
                    [ww][3].z); //bl
                positions.push(outerWindowCorners[w][ww][2].x, outerWindowCorners[w][ww][2].y, outerWindowCorners[w]
                    [ww][2].z); //tr
                positions.push(outerWindowCorners[w][ww][3].x, outerWindowCorners[w][ww][3].y, outerWindowCorners[w]
                    [ww][3].z); //tl

                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * walls[w].windowSpaces[ww].window.width /
                    maxL, exteriorUV.y); //base right
                uvs.push(exteriorUV.x, exteriorUV.y); //base Left
                uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * walls[w].windowSpaces[ww].window.width /
                    maxL, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top right
                uvs.push(exteriorUV.x, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top Left

                indices.push(nbIndices + 3, nbIndices, nbIndices + 2, nbIndices + 1, nbIndices, nbIndices + 3);

            }

            //Construction of top of wall facets
            nbIndices = positions.length / 3; // current number of indices

            positions.push(innerTopCorners[w].x, innerTopCorners[w].y, innerTopCorners[w].z); //tl
            positions.push(innerTopCorners[w + 1].x, innerTopCorners[w + 1].y, innerTopCorners[w + 1].z); //tr
            positions.push(outerTopCorners[w].x, outerTopCorners[w].y, outerTopCorners[w].z); //bl
            positions.push(outerTopCorners[w + 1].x, outerTopCorners[w + 1].y, outerTopCorners[w + 1].z); //br

            uvx = exteriorUV.x + 0.5 * wallDiff * (exteriorUV.z - exteriorUV.x) / maxL;
            uvs.push(uvx, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top Left

            uvx = exteriorUV.x + (0.5 * wallDiff + wallLength) * (exteriorUV.z - exteriorUV.x) / maxL;
            uvs.push(uvx, exteriorUV.y + (exteriorUV.w - exteriorUV.y) * ply / maxH); //top right

            uvs.push(exteriorUV.x, exteriorUV.y); //base Left		
            uvs.push(exteriorUV.x + (exteriorUV.z - exteriorUV.x) * exteriorWallLength / (maxL + wallDiff),
                exteriorUV.y); //base right

            indices.push(nbIndices + 1, nbIndices, nbIndices + 3, nbIndices + 2, nbIndices + 3, nbIndices);

            for (var p = interiorIndex; p < positions.length / 3; p++) {
                colors.push(exteriorColor.r, exteriorColor.g, exteriorColor.b, exteriorColor.a);
            }

            var compareLeft = function(a, b) {
                return a.left - b.left
            }

        }

        var normals = [];

        BABYLON.VertexData.ComputeNormals(positions, indices, normals);
        BABYLON.VertexData._ComputeSides(BABYLON.Mesh.FRONTSIDE, positions, indices, normals, uvs);
        //BABYLON.VertexData._ComputeSides(BABYLON.Mesh.DOUBLESIDE, positions, indices, normals, uvs);

        //Create a custom mesh  
        var frontUV = new BABYLON.Vector4(0.5, 0, 1, 1);
        var backUV = new BABYLON.Vector4(0, 0, 0.5, 1);
        //var customMesh = new BABYLON.Mesh("custom", {sideOrientation: BABYLON.Mesh.DOUBLESIDE, frontUVs: frontUV, backUVs: backUV}, scene);
        var customMesh = new BABYLON.Mesh("custom", scene);

        //Create a vertexData object
        var vertexData = new BABYLON.VertexData();

        //Assign positions and indices to vertexData
        vertexData.positions = positions;
        vertexData.indices = indices;
        vertexData.normals = normals;
        vertexData.uvs = uvs;
        vertexData.colors = colors;

        //console.log(vertexData);

        //Apply vertexData to custom mesh
        vertexData.applyToMesh(customMesh);

        return customMesh;

    }
    //***********************************************************************************

    //The roofprint is the footprint of the roof, it follows the floor plan of the house but is extended by the overlap
    // var roofprint = function(corners, overlap, height) {
    // 	var outerData = [];
    // 	var angle = 0;
    // 	var direction = 0;
    // 	var line = BABYLON.Vector3.Zero();
    // 	corners[1].subtractToRef(corners[0], line);
    // 	var nextLine = BABYLON.Vector3.Zero();
    // 	corners[2].subtractToRef(corners[1], nextLine);	

    // 	var nbCorners = corners.length;
    // 	for(var c = 0; c < nbCorners; c++) {	
    // 		angle = Math.PI - Math.acos(BABYLON.Vector3.Dot(line, nextLine)/(line.length() * nextLine.length()));			
    // 		direction = BABYLON.Vector3.Cross(nextLine, line).normalize().y;				
    // 		lineNormal = new BABYLON.Vector3(line.z, 0, -1 * line.x).normalize();
    // 		line.normalize();
    // 		if (c == 0) {
    // 			outerData[(c + 1) % nbCorners] = corners[(c + 1) % nbCorners].add(lineNormal.scale(overlapLRFront)).add(line.scale(direction * overlapFB/Math.tan(angle/2)));		
    // 		}
    // 		else if (c == 1 ) {
    // 			outerData[(c + 1) % nbCorners] = corners[(c + 1) % nbCorners].add(lineNormal.scale(overlapFB)).add(line.scale(direction * (overlapLRFront)/Math.tan(angle/2)));		
    // 		}
    // 		else if (c == 2) {
    // 			outerData[(c + 1) % nbCorners] = corners[(c + 1) % nbCorners].add(lineNormal.scale(overlapLRBack)).add(line.scale(direction * overlapFB/Math.tan(angle/2)));		
    // 		}
    // 		else if (c == 3 ) {
    // 			outerData[(c + 1) % nbCorners] = corners[(c + 1) % nbCorners].add(lineNormal.scale(overlapFB)).add(line.scale(direction * (overlapLRBack)/Math.tan(angle/2)));		
    // 		}
    // 		console.log(outerData);
    // 		//outerData[(c + 1) % nbCorners] = corners[(c + 1) % nbCorners].add(lineNormal.scale(overlap)).add(line.scale(direction * overlap/Math.tan(angle/2)));		
    // 		outerData[(c + 1) % nbCorners].y = height
    // 		line = nextLine.clone();		
    // 		corners[(c + 3) % nbCorners].subtractToRef(corners[(c + 2) % nbCorners], nextLine);	
    // 	}
    // 	// console.log(corners);
    // 	// console.log(outerData);
    // 	return outerData;
    // }

    var roofprint = function(corners, overlap, height) {
        var outerData = [];
        var line = BABYLON.Vector3.Zero();
        var nextLine = BABYLON.Vector3.Zero();
        var nbCorners = corners.length;
        for (var c = 0; c < nbCorners; c++) {
            line.normalize();
            if (c == 0) {
                line.x = corners[0].x - overhangFB;
                line.y = height;
                line.z = corners[0].z - overlapLRFront;
            } else if (c == 1) {
                line.x = corners[1].x + overhangFB;
                line.y = height;
                line.z = corners[1].z - overlapLRFront;
            } else if (c == 2) {
                line.x = corners[2].x + overhangFB;
                line.y = height;
                line.z = corners[2].z + overlapLRBack;
            } else if (c == 3) {
                line.x = corners[3].x - overhangFB;
                line.y = height;
                line.z = corners[3].z + overlapLRBack;
            }
            outerData.push(line);
            line = nextLine.clone();
        }

        return outerData;
    }

    var tempRoofprint = function(corners, overlap, height) {
        var outerData = [];
        var line = BABYLON.Vector3.Zero();
        var nextLine = BABYLON.Vector3.Zero();
        var nbCorners = corners.length;
        for (var c = 0; c < nbCorners; c++) {
            line.normalize();
            if (c == 0) {
                line.x = corners[0].x;
                line.y = height;
                line.z = corners[0].z - overlapLRFront;
            } else if (c == 1) {
                line.x = corners[1].x;
                line.y = height;
                line.z = corners[1].z - overlapLRFront;
            } else if (c == 2) {
                line.x = corners[2].x;
                line.y = height;
                line.z = corners[2].z + overlapLRBack;
            } else if (c == 3) {
                line.x = corners[3].x;
                line.y = height;
                line.z = corners[3].z + overlapLRBack;
            }
            outerData.push(line);
            line = nextLine.clone();
        }

        return outerData;
    }

    var roofprintLeanTo = function(corners, overlap, height) {
        var outerData = [];
        var line = BABYLON.Vector3.Zero();
        var nextLine = BABYLON.Vector3.Zero();
        var nbCorners = corners.length;
        for (var c = 0; c < nbCorners; c++) {
            line.normalize();
            if (c == 0) {
                line.x = corners[0].x;
                line.y = height;
                line.z = corners[0].z;
            } else if (c == 1) {
                line.x = corners[1].x;
                line.y = height;
                line.z = corners[1].z;
            } else if (c == 2) {
                line.x = corners[2].x;
                line.y = height;
                line.z = corners[2].z;
            } else if (c == 3) {
                line.x = corners[3].x;
                line.y = height;
                line.z = corners[3].z;
            }
            outerData.push(line);
            line = nextLine.clone();
        }

        return outerData;
    }

    var roofprintFB = function(corners, overlap, height) {
        var outerData = [];
        var angle = 0;
        var direction = 0;
        var line = BABYLON.Vector3.Zero();
        corners[1].subtractToRef(corners[0], line);
        var nextLine = BABYLON.Vector3.Zero();
        corners[2].subtractToRef(corners[1], nextLine);

        var nbCorners = corners.length;
        for (var c = 0; c < nbCorners; c++) {
            angle = Math.PI - Math.acos(BABYLON.Vector3.Dot(line, nextLine) / (line.length() * nextLine.length()));
            direction = BABYLON.Vector3.Cross(nextLine, line).normalize().y;
            lineNormal = new BABYLON.Vector3(line.z, 0, -1 * line.x).normalize();
            line.normalize();
            outerData[(c + 1) % nbCorners] = corners[(c + 1) % nbCorners].add(lineNormal.scale(overlap)).add(line
                .scale(direction * overlap / Math.tan(angle / 2)));
            outerData[(c + 1) % nbCorners].y = height
            line = nextLine.clone();
            corners[(c + 3) % nbCorners].subtractToRef(corners[(c + 2) % nbCorners], nextLine);
        }

        return outerData;
    }

    //The roof floor (or top ceiling of the house) created from the roofprint of the house
    var roofFloor = function(roofprint) {
        var height = roofprint[0].y;
        var floor = BABYLON.MeshBuilder.CreatePolygon("polygon", {
            shape: roofprint,
            updatable: true,
            sideOrientation: BABYLON.Mesh.BACKSIDE
        }, scene);
        var positions = floor.getVerticesData(BABYLON.VertexBuffer.PositionKind);
        for (var p = 0; p < positions.length / 3; p++) {
            positions[3 * p + 1] = height + 0.01;
        }
        floor.updateVerticesData(BABYLON.VertexBuffer.PositionKind, positions);
        return floor;
    }

    //Creates the mesh roof structure 
    var roof = function(roofprint, apexes, planes, rise, height, uvbase, roofMesh, id) {
        var positions = [];
        var uvs = [];

        var offset = roofprint.length;
        var vidx = [];
        var currentv = [];
        var v = [
            new BABYLON.Vector3(0, 0, 0),
            new BABYLON.Vector3(0, 0, 0),
            new BABYLON.Vector3(0, 0, 0),
            new BABYLON.Vector3(0, 0, 0)
        ]
        var vint = new BABYLON.Vector3(0, 0, 0);
        var indices = [];
        var index = 0;
        var norm = new BABYLON.Vector3(0, 0, 0);
        var inPlane = new BABYLON.Vector3(0, 0, 0);
        var ax0 = new BABYLON.Vector3(0, 0, 0);
        var ax1 = new BABYLON.Vector3(0, 0, 0);
        var xvalues = [];
        var yvalues = [];
        var uvs = [];
        var uvset = new Set();
        var colors = [];
        for (var i = 0; i < planes.length; i++) {
            for (var idx = 0; idx < 3; idx++) {
                vidx[idx] = parseInt(planes[i][idx].substring(1));
                if (planes[i][idx].substring(0, 1).toLowerCase() == "c") {
                    positions.push(roofprint[vidx[idx]].x, roofprint[vidx[idx]].y, roofprint[vidx[idx]].z)
                    indices.push(index);
                } else {
                    positions.push(apexes[vidx[idx]].x, rise + height, apexes[vidx[idx]].y);
                    indices.push(index);
                }
                currentv[idx] = index;
                v[idx].set(positions[3 * index], positions[3 * index + 1], positions[3 * index + 2]);
                index++;
            }

            if (planes[i].length == 4) {
                if (planes[i][0].substring(0, 1).toLowerCase() == "c") {
                    positions.push(roofprint[vidx[0]].x, roofprint[vidx[0]].y, roofprint[vidx[0]].z)
                    indices.push(index);
                } else {
                    positions.push(apexes[vidx[0]].x, rise + height, apexes[vidx[0]].y);
                    indices.push(index);
                }
                currentv[idx] = index;
                v[idx].set(positions[3 * index], positions[3 * index + 1], positions[3 * index + 2]);
                index++;
                for (var idx = 2; idx < 4; idx++) {
                    vidx[idx] = parseInt(planes[i][idx].substring(1));
                    if (planes[i][idx].substring(0, 1).toLowerCase() == "c") {
                        positions.push(roofprint[vidx[idx]].x, roofprint[vidx[idx]].y, roofprint[vidx[idx]].z)
                        indices.push(index);
                    } else {
                        positions.push(apexes[vidx[idx]].x, rise + height, apexes[vidx[idx]].y);
                        indices.push(index);
                    }
                    currentv[idx] = index;
                    v[idx].set(positions[3 * index], positions[3 * index + 1], positions[3 * index + 2]);
                    index++;
                }
            }
            ax0 = v[1].subtract(v[0]).normalize();

            if (BABYLON.Vector3.Dot(ax0, BABYLON.Axis.Y) > 0) {
                vint = v[1].subtract(v[2]);
                vint.y = 0;
                ax0 = v[0].add(vint).normalize();
            }
            ax1 = v[2].subtract(v[0]).normalize();
            norm = BABYLON.Vector3.Cross(ax0, ax1).normalize();
            inPlane = BABYLON.Vector3.Cross(norm, ax0).normalize();
            xvalues[0] = 0;
            yvalues[0] = 0;
            xvalues[1] = BABYLON.Vector3.Dot(v[1].subtract(v[0]), ax0);
            yvalues[1] = BABYLON.Vector3.Dot(v[1].subtract(v[0]), inPlane);
            xvalues[2] = BABYLON.Vector3.Dot(v[2].subtract(v[0]), ax0);
            yvalues[2] = BABYLON.Vector3.Dot(v[2].subtract(v[0]), inPlane);

            minX = Math.min(xvalues[0], xvalues[1], xvalues[2]);
            if (planes[i].length == 4) {
                xvalues[3] = BABYLON.Vector3.Dot(v[3].subtract(v[0]), ax0);
                yvalues[3] = BABYLON.Vector3.Dot(v[3].subtract(v[0]), inPlane);
                minX = Math.min(minX, xvalues[3]);
            }
            for (var idx = 0; idx < 3; idx++) {
                if (minX < 0) {
                    xvalues[idx] += Math.abs(minX);
                }
                uvs.push(xvalues[idx] / uvbase, yvalues[idx] / uvbase);
            }
            if (planes[i].length == 4) {
                uvs.push(xvalues[0] / uvbase, yvalues[0] / uvbase);
                uvs.push(xvalues[2] / uvbase, yvalues[2] / uvbase);
                if (minX < 0) {
                    xvalues[3] += Math.abs(minX);
                }
                uvs.push(xvalues[3] / uvbase, yvalues[3] / uvbase);
            }
        }

        roofMesh = new BABYLON.Mesh(id, scene);
        roofMesh.DOUBLESIDE = 1;

        var normals = [];
        //				for (ii=0; ii<positions.length/2; ii++)	{
        // 					colors.push(roofColor[0], roofColor[1], roofColor[2], 1);	}
        if (positions.length == 36) {
            for (ii = 0; ii < 12; ii++) {
                colors.push(roofColor[0], roofColor[1], roofColor[2], 1);
            }
            for (ii = 12; ii < 18; ii++) {
                //colors.push(roofColor[0], roofColor[1], roofColor[2], 1);	}
                colors.push(1, 1, 1, 1);
            }
            for (ii = 18; ii < 27; ii++) {
                //colors.push(roofColor[0], roofColor[1], roofColor[2], 1);	}
                colors.push(1, 1, 1, 1);
            }
            for (ii = 27; ii < positions.length; ii++) {
                colors.push(1, 1, 1, 1);
            }
        }

        if (positions.length == 18) {
            for (ii = 0; ii < 6; ii++) {
                if (id.includes("LeanToMesh")) {
                    colors.push(roofColor[0], roofColor[1], roofColor[2], 1);
                } else {
                    colors.push(wallColor[0], wallColor[1], wallColor[2], 1);
                }
            }
            for (ii = 6; ii < 12; ii++) {
                colors.push(1, 1, 1, 1);
            }
            for (ii = 12; ii < positions.length; ii++) {
                colors.push(1, 1, 1, 1);
            }
        }

        //console.log(positions);

        var vertexData = new BABYLON.VertexData();
        BABYLON.VertexData.ComputeNormals(positions, indices, normals);
        BABYLON.VertexData._ComputeSides(BABYLON.Mesh.DOUBLESIDE, positions, indices, normals, uvs);

        if (id == "tempRoofTop") {
            roofPositions = [];
            roofIndices = [];
            for (ii = 0; ii < 9; ii++) {
                roofPositions.push(positions[ii]);
                roofIndices.push(ii);
            }
            for (ii = 15; ii < 24; ii++) {
                roofPositions.push(positions[ii]);
                roofIndices.push(ii - 6);
            }
            //console.log(roofPositions);
            //console.log(roofIndices);
        }

        vertexData.positions = positions;
        vertexData.indices = indices;
        vertexData.normals = normals;
        vertexData.uvs = uvs;
        vertexData.colors = colors;
        vertexData.applyToMesh(roofMesh);

        //console.log(vertexData);

        return roofMesh;
    }

    var computeBaseData = function() {
        baseData = [(0 - (width / 2)), 0, (width / 2), 0, (width / 2), length, (0 - (width / 2)), length];
    }

    //Rebuilds the entire roof
    var rebuildRoof = function() {

        disposeRoofTrim();
        disposeRidgeCap();

        roofHeight = (roofPitch * 0.83333);
        overlapFB = ply + overhangFB;
        roofApexDataLR = [0, 0 - overhangLRFront - ply, 0, length + overhangLRBack + ply];
        roofApexDataFB = [0, 0 - ply, 0, length + ply];

        if (roofTop != null) {
            roofTop.dispose();
        }

        if (roofFB != null) {
            roofFB.dispose();
        }

        wholeRoofprint = roofprint(corners, (overlapLRFront + overlapLRBack), height - (overhangFB * 0.095 *
            roofHeight));
        //wholeRoofprint = roofprint(corners, (overlapLRFront+overlapLRBack), height-(overhangFB*0.095*roofHeight)+((width-21)*0.05) );


        apexes = [];

        for (var i = 0; i < roofApexDataLR.length / 2; i++) {
            apexes.push(new BABYLON.Vector2(roofApexDataLR[2 * i], roofApexDataLR[2 * i + 1]))
        }

        roofTop = roof(wholeRoofprint, apexes, planesLR, roofHeight, height, 5.6, roofTop, "roofTop");
        roofTop.material = new BABYLON.StandardMaterial("", scene);
        //roofTop.material.diffuseColor = new BABYLON.Color3(roofColor[0], roofColor[1], roofColor[2]);
        roofTop.material.bumpTexture = new BABYLON.Texture("roof_panel_normal.png", scene);
        //roofTop.material.invertNormalMapX = true;

        //console.log(roofTop);

        wholeRoofprint = roofprintFB(corners, ply, height);

        // 				apexes = [];

        // 				for(var i = 0; i < roofApexDataFB.length / 2; i++) {
        // 					apexes.push(new BABYLON.Vector2(roofApexDataFB[2 * i], roofApexDataFB[2 * i + 1]))
        // 				}

        // 				roofFB = roof(wholeRoofprint, apexes, planesFB, roofHeight, height, 5.6, roofFB, "roofFB");
        // 				roofFB.material = new BABYLON.StandardMaterial("", scene);
        // 				roofFB.material.bumpTexture = new BABYLON.Texture("roof_panel_fb.png", scene);
        // 				roofFB.material.invertNormalMapX = true;

        if (overhangLRFront > 0 || overhangLRBack > 0) {
            buildPosts();
        } else {
            for (var i = 0; i < gablePosts.length; i++) {
                gablePosts[i].dispose();
            }
        }

        buildRoofTrim();
        placeRidgeCap();
    }

    //Builds a temporary roof top for trim calculations
    var buildTempRoof = function() {

        roofHeight = (roofPitch * 0.83333);
        overlapFB = ply;
        roofApexDataLR = [0, 0 - overhangLRFront - ply, 0, length + overhangLRBack + ply];
        roofApexDataFB = [0, 0 - ply, 0, length + ply];

        if (tempRoofTop != null) {
            tempRoofTop.dispose();
        }

        wholeRoofprint = tempRoofprint(corners, (overlapLRFront + overlapLRBack), height);

        apexes = [];

        for (var i = 0; i < roofApexDataLR.length / 2; i++) {
            apexes.push(new BABYLON.Vector2(roofApexDataLR[2 * i], roofApexDataLR[2 * i + 1]))
        }

        tempRoofTop = roof(wholeRoofprint, apexes, planesLR, roofHeight, height, 5.6, tempRoofTop, "tempRoofTop");
    }

    //***********************************************************************************

    var rebuildWalls = function() {
        for (ii = 0; ii < wallMeshes.length; ii++) {
            wallMeshes[ii].dispose();
        }

        if (house != null) {
            house.dispose();
        }
        corners = [];
        walls = [];
        for (b = 0; b < baseData.length / 2; b++) {
            corners.push(new corner(baseData[2 * b], baseData[2 * b + 1]));
        }

        //console.log(corners);

        for (c = 0; c < corners.length; c++) {
            walls.push(new wall(corners[c]));
        }

        disposeWindowMeshes();
        disposeDoorMeshes();
        disposeWallTrim();

        for (w = 0; w < windowSpaces.length; w++) {
            for (ws = 0; ws < windowSpaces[w].length; ws++) {
                switch (w) {
                    case 0:
                    case 2: {
                        if (windowSpaces[w][ws].left + defaultWindow.width + 1 <= width) {
                            walls[w].windowSpaces.push(windowSpaces[w][ws]);
                            placeWindowModel(w, windowSpaces[w][ws]);
                        }
                        break;
                    }
                    case 1:
                    case 3: {
                        if (windowSpaces[w][ws].left + defaultWindow.width + 1 <= length) {
                            walls[w].windowSpaces.push(windowSpaces[w][ws]);
                            placeWindowModel(w, windowSpaces[w][ws]);
                        }
                        break;
                    }
                }

            }
        }

        var doorLimit = width;

        for (d = 0; d < doorSpaces.length; d++) {
            for (ds = 0; ds < doorSpaces[d].length; ds++) {
                if (d % 2 == 0) {
                    doorLimit = width;
                } else {
                    doorLimit = length;
                }

                if (doorSpaces[d][ds].left + doors[d][ds].width + 1 <= doorLimit) {
                    walls[d].doorSpaces.push(doorSpaces[d][ds]);
                    //if (doors[d][ds].width == 3 && doors[d][ds].height == 7)
                    //{	place3x7DoorModel(d, doorSpaces[d][ds]);	}
                    switch (doors[d][ds].type) {
                        case "3x7 Single Door": {
                            place3x7EDoorModel(d, doors[d][ds], doorSpaces[d][ds]);
                        }
                        break;
                    case "4x7 Single Door": {
                        place4x7EDoorModel(d, doors[d][ds], doorSpaces[d][ds]);
                    }
                    break;
                    case "6x7 Double Door": {
                        place6x7EDoorModel(d, doors[d][ds], doorSpaces[d][ds]);
                    }
                    break;
                    case "8x8 Sectional": { //scaling = new BABYLON.Vector3(2.2575, 2.728, 2);
                        scaling = new BABYLON.Vector3(2.175, 2.7, 2);
                        frameScaling = new BABYLON.Vector3(2, 3.85, 4.3);
                        placeSectionalDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "8x10 Sectional": { //scaling = new BABYLON.Vector3(2.2575, 3.4, 2);
                        scaling = new BABYLON.Vector3(2.175, 3.375, 2);
                        frameScaling = new BABYLON.Vector3(2, 4.8125, 4.3);
                        placeSectionalDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "10x8 Sectional": { //scaling = new BABYLON.Vector3(2.825, 2.728, 2);
                        scaling = new BABYLON.Vector3(2.71875, 2.7, 2);
                        frameScaling = new BABYLON.Vector3(2, 3.85, 5.375);
                        placeSectionalDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "10x10 Sectional": { //scaling = new BABYLON.Vector3(2.825, 3.4, 2);
                        scaling = new BABYLON.Vector3(2.71875, 3.375, 2);
                        frameScaling = new BABYLON.Vector3(2, 4.8125, 5.375);
                        placeSectionalDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "12x8 Sectional": { //scaling = new BABYLON.Vector3(3.4, 2.728, 2);
                        scaling = new BABYLON.Vector3(3.375, 2.7, 2);
                        frameScaling = new BABYLON.Vector3(2, 3.85, 6.45);
                        placeSectionalDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "8x8 Roll Up": { //scaling = new BABYLON.Vector3(0.0264, 0.0308, 0.05);
                        scaling = new BABYLON.Vector3(0.025175, 0.0308, 0.05);
                        frameScaling = new BABYLON.Vector3(2, 3.85, 4.3);
                        placeRollupDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "8x10 Roll Up": { //scaling = new BABYLON.Vector3(0.0264, 0.0385, 0.05);
                        scaling = new BABYLON.Vector3(0.025175, 0.0385, 0.05);
                        frameScaling = new BABYLON.Vector3(2, 4.8125, 4.3);
                        placeRollupDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "10x8 Roll Up": { //scaling = new BABYLON.Vector3(0.033, 0.0308, 0.05);
                        scaling = new BABYLON.Vector3(0.03146875, 0.0308, 0.05);
                        frameScaling = new BABYLON.Vector3(2, 3.85, 5.375);
                        placeRollupDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "10x10 Roll Up": { //scaling = new BABYLON.Vector3(0.033, 0.0385, 0.05);
                        scaling = new BABYLON.Vector3(0.03146875, 0.0385, 0.05);
                        frameScaling = new BABYLON.Vector3(2, 4.8125, 5.375);
                        placeRollupDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "10x12 Roll Up": { //scaling = new BABYLON.Vector3(0.033, 0.046, 0.05);
                        scaling = new BABYLON.Vector3(0.03146875, 0.046, 0.05);
                        frameScaling = new BABYLON.Vector3(2, 5.79, 5.375);
                        placeRollupDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "10x14 Roll Up": { //scaling = new BABYLON.Vector3(0.033, 0.0535, 0.05);
                        scaling = new BABYLON.Vector3(0.03146875, 0.0535, 0.05);
                        frameScaling = new BABYLON.Vector3(2, 6.735, 5.375);
                        placeRollupDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "12x8 Roll Up": { //scaling = new BABYLON.Vector3(0.0395, 0.0308, 0.05);
                        scaling = new BABYLON.Vector3(0.037667, 0.0308, 0.05);
                        frameScaling = new BABYLON.Vector3(2, 3.85, 6.45);
                        placeRollupDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "12x10 Roll Up": { //scaling = new BABYLON.Vector3(0.0395, 0.0385, 0.05);
                        scaling = new BABYLON.Vector3(0.037667, 0.0385, 0.05);
                        frameScaling = new BABYLON.Vector3(2, 4.8125, 6.45);
                        placeRollupDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "12x12 Roll Up": { //scaling = new BABYLON.Vector3(0.0395, 0.046, 0.05);
                        scaling = new BABYLON.Vector3(0.037667, 0.046, 0.05);
                        frameScaling = new BABYLON.Vector3(2, 5.79, 6.45);
                        placeRollupDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "12x14 Roll Up": { //scaling = new BABYLON.Vector3(0.0395, 0.0535, 0.05);
                        scaling = new BABYLON.Vector3(0.037667, 0.0535, 0.05);
                        frameScaling = new BABYLON.Vector3(2, 6.735, 6.45);
                        placeRollupDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "14x8 Roll Up": { //scaling = new BABYLON.Vector3(0.04625, 0.0311, 0.05);
                        scaling = new BABYLON.Vector3(0.044104, 0.0311, 0.05);
                        frameScaling = new BABYLON.Vector3(2, 3.85, 7.525);
                        placeRollupDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "14x10 Roll Up": { //scaling = new BABYLON.Vector3(0.04625, 0.0385, 0.05);
                        scaling = new BABYLON.Vector3(0.044104, 0.0385, 0.05);
                        frameScaling = new BABYLON.Vector3(2, 4.8125, 7.525);
                        placeRollupDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "14x12 Roll Up": { //scaling = new BABYLON.Vector3(0.04625, 0.046, 0.05);
                        scaling = new BABYLON.Vector3(0.044104, 0.046, 0.05);
                        frameScaling = new BABYLON.Vector3(2, 5.79, 7.525);
                        placeRollupDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    case "14x14 Roll Up": { //scaling = new BABYLON.Vector3(0.04625, 0.0535, 0.05);
                        scaling = new BABYLON.Vector3(0.044104, 0.0535, 0.05);
                        frameScaling = new BABYLON.Vector3(2, 6.735, 7.525);
                        placeRollupDoorModel(d, doors[d][ds], doorSpaces[d][ds], scaling, frameScaling);
                    }
                    break;
                    }
                }
            }
        }

        house = buildFromPlan(walls, ply, height, {
            interiorUV: new BABYLON.Vector4(0, 0, (width * 2 + length * 2) / 4, (width * 2 + length * 2) /
                4),
            exteriorUV: new BABYLON.Vector4(0, 0, (width * 2 + length * 2) / 4, (width * 2 + length * 2) /
                4),
            interiorColor: new BABYLON.Color4(1, 1, 1, 1),
            exteriorColor: new BABYLON.Color4(wallColor[0], wallColor[1], wallColor[2], 1)
        }, scene);
        //house.material = new BABYLON.StandardMaterial("", scene);
        //house.material.bumpTexture = new BABYLON.Texture("wall_panel_normal.png", scene);
        //house.material.invertNormalMapX = true;

        //console.log(house);
        disposeWallTrim();
        placeWallTrim(0);
        placeWallTrim(1);
        placeWallTrim(2);
        placeWallTrim(3);
        disposeRidgeCap();
        placeRidgeCap();
    }

    var buildWallTrim = function() {
        //console.log(corners);

        var leftPlane = null;
        var rightPlane = null;

        for (c = 0; c < corners.length; c++) {
            leftPlane = BABYLON.MeshBuilder.CreatePlane("wallTrim", {
                height: height,
                width: 0.25,
                sideOrientation: BABYLON.Mesh.DOUBLESIDE
            });
            leftPlane.material = new BABYLON.StandardMaterial("", scene);
            leftPlane.material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1], trimColor[2]);

            rightPlane = BABYLON.MeshBuilder.CreatePlane("wallTrim", {
                height: height,
                width: 0.25,
                sideOrientation: BABYLON.Mesh.DOUBLESIDE
            });
            rightPlane.material = new BABYLON.StandardMaterial("", scene);
            rightPlane.material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1], trimColor[2]);

            switch (c) {
                case 0: {
                    leftPlane.position.x = corners[c].x + 0.115;
                    leftPlane.position.y = height / 2;
                    leftPlane.position.z = -0.01;
                    wallTrimMeshes.push(leftPlane);
                    rightPlane.position.x = corners[c + 1].x - 0.115;
                    rightPlane.position.y = height / 2;
                    rightPlane.position.z = -0.01;
                    wallTrimMeshes.push(rightPlane);
                    break;
                }
                case 1: {
                    leftPlane.position.x = corners[c].x + 0.01;
                    leftPlane.position.y = height / 2;
                    leftPlane.position.z = 0.115;
                    leftPlane.rotation.y = 1.5708;
                    wallTrimMeshes.push(leftPlane);
                    rightPlane.position.x = corners[c + 1].x + 0.01;
                    rightPlane.position.y = height / 2;
                    rightPlane.position.z = length - 0.115;
                    rightPlane.rotation.y = 1.5708;
                    wallTrimMeshes.push(rightPlane);
                    break;
                }
                case 2: {
                    leftPlane.position.x = corners[c].x - 0.115;
                    leftPlane.position.y = height / 2;
                    leftPlane.position.z = length + 0.01;
                    wallTrimMeshes.push(leftPlane);
                    rightPlane.position.x = corners[c + 1].x + 0.115;
                    rightPlane.position.y = height / 2;
                    rightPlane.position.z = length + 0.01;
                    wallTrimMeshes.push(rightPlane);
                    break;
                }
                case 3: {
                    leftPlane.position.x = corners[c].x - 0.01;
                    leftPlane.position.y = height / 2;
                    leftPlane.position.z = length - 0.115;
                    leftPlane.rotation.y = 1.5708;
                    wallTrimMeshes.push(leftPlane);
                    rightPlane.position.x = corners[0].x - 0.01;
                    rightPlane.position.y = height / 2;
                    rightPlane.position.z = 0.115;
                    rightPlane.rotation.y = 1.5708;
                    wallTrimMeshes.push(rightPlane);
                    break;
                }
            }

        }
    }

    var disposeWallTrim = function() {
        var meshCount = scene.meshes.length - 1;
        for (var i = meshCount; i >= 0; i--) {
            if (scene.meshes[i].name == "wallTrim") {
                scene.meshes[i].dispose();
            }
        }
    }

    var buildRoofTrim = function() {
        //console.log(corners);

        var leftPlane = null;
        var rightPlane = null;

        buildTempRoof();
        if (tempRoofTop != null) {
            tempRoofTop.dispose();
        }

        a = roofPositions[7] - height;
        b = width / 2
        c = Math.sqrt(Math.pow(a, 2) + Math.pow(b, 2));
        //console.log(roofPositions[7]);
        //console.log(height);
        //console.log(b);
        //console.log("c = "+c);
        //roofAngle = Math.asin(a/b);
        roofAngle = Math.asin(a / c);

        leftPlane = BABYLON.MeshBuilder.CreatePlane("roofTrim", {
            height: 0.25,
            width: length + overhangLRFront + overhangLRBack,
            sideOrientation: BABYLON.Mesh.DOUBLESIDE
        });
        leftPlane.material = new BABYLON.StandardMaterial("", scene);
        leftPlane.material.diffuseColor = new BABYLON.Color3(roofColor[0], roofColor[1], roofColor[2]);

        rightPlane = BABYLON.MeshBuilder.CreatePlane("roofTrim", {
            height: 0.25,
            width: length + overhangLRFront + overhangLRBack,
            sideOrientation: BABYLON.Mesh.DOUBLESIDE
        });
        rightPlane.material = new BABYLON.StandardMaterial("", scene);
        rightPlane.material.diffuseColor = new BABYLON.Color3(roofColor[0], roofColor[1], roofColor[2]);

        leftPlane.position.x = 0.125;
        leftPlane.position.y = height + roofHeight - 0.0125; //roofPositions[1]-0.125+a/2;
        leftPlane.position.z = length / 2 - overhangLRFront / 2 + overhangLRBack / 2;
        leftPlane.rotation.x = 1.5708 + roofAngle;
        leftPlane.rotation.y = 1.5708;

        rightPlane.position.x = 0 - 0.125;
        rightPlane.position.y = height + roofHeight - 0.0125; //roofPositions[1]-0.125+a/2;
        rightPlane.position.z = length / 2 - overhangLRFront / 2 + overhangLRBack / 2;
        rightPlane.rotation.x = 1.5708 - roofAngle;
        rightPlane.rotation.y = 1.5708;

        for (ii = 0; ii < corners.length; ii++) {
            switch (ii) {
                case 0: {
                    leftPlane = BABYLON.MeshBuilder.CreatePlane("roofTrim", {
                        height: 0.25,
                        width: c,
                        sideOrientation: BABYLON.Mesh.DOUBLESIDE
                    });
                    leftPlane.material = new BABYLON.StandardMaterial("", scene);
                    leftPlane.material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1], trimColor[2]);

                    rightPlane = BABYLON.MeshBuilder.CreatePlane("roofTrim", {
                        height: 0.25,
                        width: c,
                        sideOrientation: BABYLON.Mesh.DOUBLESIDE
                    });
                    rightPlane.material = new BABYLON.StandardMaterial("", scene);
                    rightPlane.material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1], trimColor[2]);

                    leftPlane.position.x = 0 - (b / 2) + 0.025;
                    leftPlane.position.y = roofPositions[1] - 0.125 + a / 2;
                    leftPlane.position.z = 0 - 0.01;
                    leftPlane.rotation.z = roofAngle;

                    rightPlane.position.x = 0 + (b / 2) - 0.025;
                    rightPlane.position.y = roofPositions[1] - 0.125 + a / 2;
                    rightPlane.position.z = 0 - 0.01;
                    rightPlane.rotation.z = 0 - roofAngle;
                    break;
                }
                case 1: {
                    leftPlane = BABYLON.MeshBuilder.CreatePlane("roofTrim", {
                        height: 0.25,
                        width: length,
                        sideOrientation: BABYLON.Mesh.DOUBLESIDE
                    });
                    leftPlane.material = new BABYLON.StandardMaterial("", scene);
                    leftPlane.material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1], trimColor[2]);

                    leftPlane.position.x = roofPositions[0] + 0.01;
                    leftPlane.position.y = roofPositions[1] - 0.125;
                    leftPlane.position.z = length / 2;
                    leftPlane.rotation.y = 1.5708;
                    break;
                }
                case 2: {
                    leftPlane = BABYLON.MeshBuilder.CreatePlane("roofTrim", {
                        height: 0.25,
                        width: c,
                        sideOrientation: BABYLON.Mesh.DOUBLESIDE
                    });
                    leftPlane.material = new BABYLON.StandardMaterial("", scene);
                    leftPlane.material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1], trimColor[2]);

                    rightPlane = BABYLON.MeshBuilder.CreatePlane("roofTrim", {
                        height: 0.25,
                        width: c,
                        sideOrientation: BABYLON.Mesh.DOUBLESIDE
                    });
                    rightPlane.material = new BABYLON.StandardMaterial("", scene);
                    rightPlane.material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1], trimColor[2]);

                    leftPlane.position.x = 0 - (b / 2) + 0.025;
                    leftPlane.position.y = roofPositions[1] - 0.125 + a / 2;
                    leftPlane.position.z = length + 0.01;
                    leftPlane.rotation.z = roofAngle;

                    rightPlane.position.x = 0 + (b / 2) - 0.025;
                    rightPlane.position.y = roofPositions[1] - 0.125 + a / 2;
                    rightPlane.position.z = length + 0.01;
                    rightPlane.rotation.z = 0 - roofAngle;

                    break;
                }
                case 3: {
                    leftPlane = BABYLON.MeshBuilder.CreatePlane("roofTrim", {
                        height: 0.25,
                        width: length,
                        sideOrientation: BABYLON.Mesh.DOUBLESIDE
                    });
                    leftPlane.material = new BABYLON.StandardMaterial("", scene);
                    leftPlane.material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1], trimColor[2]);

                    // 							rightPlane = BABYLON.MeshBuilder.CreatePlane("roofTrim", {height:0.25, width: length, sideOrientation: BABYLON.Mesh.DOUBLESIDE});
                    // 							rightPlane.material = new BABYLON.StandardMaterial("", scene);
                    // 							rightPlane.material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1], trimColor[2]);

                    leftPlane.position.x = roofPositions[15] - 0.01;
                    leftPlane.position.y = roofPositions[16] - 0.125;
                    leftPlane.position.z = length / 2;
                    leftPlane.rotation.y = 1.5708;

                    // 							rightPlane.position.x = roofPositions[15]+0.115;
                    // 							rightPlane.position.y = roofPositions[16]+0.02;
                    // 							rightPlane.position.z = length/2
                    // 							rightPlane.rotation.y = 1.5708;
                    // 							rightPlane.rotation.x = 1.5708-roofAngle;

                    break;
                }
            }

        }
    }

    var disposeRoofTrim = function() {
        var meshCount = scene.meshes.length - 1;
        for (var i = meshCount; i >= 0; i--) {
            if (scene.meshes[i].name == "roofTrim") {
                scene.meshes[i].dispose();
            }
        }
    }

    var loadWallTrim = function() {
        BABYLON.SceneLoader.ImportMesh(
            "",
            "",
            "GableTrim.obj",
            scene,
            function(meshes) {
                //log the name of the meshes we just imported
                for (var i = 0; i < meshes.length; i++) {
                    //console.log(meshes[i].name);
                    //meshes[i].scaling = new BABYLON.Vector3(0.5, 5.8, 0.5);
                    //meshes[i].material = new BABYLON.StandardMaterial("", scene);
                    //meshes[i].material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1], trimColor[2]);
                    //meshes[i].position.x = width/2-0.4;
                    //meshes[i].position.z = length+0.05;
                    //meshes[i].material.diffuseColor = new BABYLON.Color3(0, 1, 1);
                    meshes[i].visibility = 0;
                }
            }
        );
        wallTrimMeshNames = ["Part2"];
    }

    var placeWallTrim = function(wall) { //wall edge
        //console.log("Place wall trim");
        var meshCount = scene.meshes.length;
        for (var i = 0; i < meshCount; i++) {

            if (wallTrimMeshNames.includes(scene.meshes[i].name) == true) {
                //console.log("Cloning wall trim");
                //mesh2 = scene.meshes[i].clone(scene.meshes[i].name+i);
                mesh2 = scene.meshes[i].clone("wallTrim");
                wallTrimMeshes.push(scene.meshes[i].name + wall)
                mesh2.material = new BABYLON.StandardMaterial("", scene);
                switch (wall) {
                    case 0: {
                        //mesh2.scaling = new BABYLON.Vector3(0.5, 5.8, 0.5);
                        mesh2.scaling = new BABYLON.Vector3(0.5, height * 0.64444, 0.5);
                        mesh2.position.x = 0 - width / 2 + 0.4;
                        mesh2.position.z = 0 - 0.05;
                        mesh2.rotation.y = 3.14159;
                        mesh2.material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1], trimColor[2]);
                        mesh2.visibility = 1;
                        break;
                    }
                    case 1: {
                        mesh2.scaling = new BABYLON.Vector3(0.5, height * 0.64444, 0.5);
                        mesh2.position.x = width / 2 + 0.1;
                        mesh2.position.z = 0.4;
                        mesh2.rotation.y = 1.5708;
                        mesh2.material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1], trimColor[2]);
                        mesh2.visibility = 1;
                        break;
                    }
                    case 2: {
                        mesh2.scaling = new BABYLON.Vector3(0.5, height * 0.64444, 0.5);
                        mesh2.position.x = width / 2 - 0.4;
                        mesh2.position.z = length + 0.05;
                        mesh2.material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1], trimColor[2]);
                        mesh2.visibility = 1;
                        break;
                    }
                    case 3: {
                        mesh2.scaling = new BABYLON.Vector3(0.5, height * 0.64444, 0.5);
                        mesh2.position.x = 0 - width / 2 - 0.1;
                        mesh2.position.z = length - 0.4;
                        mesh2.rotation.y = 4.71239;
                        mesh2.material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1], trimColor[2]);
                        mesh2.visibility = 1;
                        break;
                    }
                }
            }
        }
    }

    // 			var disposeWallTrim = function(){
    // 				if (wallTrimMeshes.length > 0 ) {
    // 					var meshCount = scene.meshes.length-1;
    // 					for(var i = meshCount; i >= 0; i--){
    // 						if (wallTrimMeshes.includes(scene.meshes[i].name) == true ) {
    // 							scene.meshes[i].dispose();
    // 						}
    // 					}
    // 					wallTrimMeshes = [];
    // 				}
    // 			}

    var loadRidgeCap = function() {
        BABYLON.SceneLoader.ImportMesh(
            "",
            "",
            "RidgeCap.obj",
            scene,
            function(meshes) {
                //log the name of the meshes we just imported
                for (var i = 0; i < meshes.length; i++) {
                    // console.log(meshes[i].name);
                    meshes[i].material = new BABYLON.StandardMaterial("", scene);
                    meshes[i].material.diffuseColor = new BABYLON.Color3(1, 0, 0);
                    meshes[i].position.y = height + roofHeight + 0.1;
                    meshes[i].scaling = new BABYLON.Vector3(0.5, 0.5, 13.1);
                    meshes[i].visibility = 0;
                }
            }
        );
    }

    var disposeRidgeCap = function() {
        var meshCount = scene.meshes.length - 1;
        for (var i = meshCount; i >= 0; i--) {
            if (scene.meshes[i].name == "RidgeCap") {
                scene.meshes[i].dispose();
            }
        }
    }

    var placeRidgeCap = function() {

        // console.log("Place ridge cap");

        var meshCount = scene.meshes.length;

        for (var i = 0; i < meshCount; i++) {

            if (scene.meshes[i].name == "rcp_v1") {
                // console.log("Cloning ridge cap");
                mesh2 = scene.meshes[i].clone("RidgeCap");

                mesh2.material = new BABYLON.StandardMaterial("", scene);
                mesh2.material.diffuseColor = new BABYLON.Color3(roofColor[0], roofColor[1], roofColor[2]);
                mesh2.position.y = height + roofHeight + 0.1;
                //mesh2.scaling = new BABYLON.Vector3(0.5, 0.5, 13.1);
                mesh2.scaling = new BABYLON.Vector3(0.5, 0.5, (length + overlapLRFront + overlapLRBack) * 0.655);
                mesh2.position.z = 0 - overlapLRFront;
                mesh2.visibility = 1;
            }
        }

    }

    var loadRakeTrim = function() {
        BABYLON.SceneLoader.ImportMesh(
            "",
            "",
            "RakeTrimRight.obj",
            scene,
            function(meshes) {
                //log the name of the meshes we just imported
                for (var i = 0; i < meshes.length; i++) {
                    // console.log(meshes[i].name);
                    meshes[i].material = new BABYLON.StandardMaterial("", scene);
                    meshes[i].material.diffuseColor = new BABYLON.Color3(1, 0, 0);
                    meshes[i].position.y = 5;
                    //meshes[i].scaling = new BABYLON.Vector3(0.5, length, 0.5);

                    //meshes[i].addRotation.x( Math.PI / 4, 0, 0);
                    //meshes[i].addRotation.x( 0, Math.PI / 2, 0);
                    //meshes[i].rotation.y = 0.785398;
                    //meshes[i].rotation.z = 0.785398;
                    //meshes[i].visibility = 0;
                }
            }
        );
    }


    var loadWindowModel = function() {
        BABYLON.SceneLoader.ImportMesh(
            "",
            "./",
            "Window_01.obj",
            scene,
            function(meshes) {
                for (var i = 0; i < meshes.length; i++) {
                    meshes[i].visibility = 0;
                    meshes[i].scaling = new BABYLON.Vector3(0.0325, 0.020, 0.010);
                }
            }
        );
        windowMeshNames = ["casing", "jam", "lower_sash", "glass_lower_sash", "upper_sash", "sash_lock",
            "glass_upper_sash",
            "mesh_mm1", "mesh_mm2", "mesh_mm3", "mesh_mm4", "mesh_mm5", "mesh_mm6", "mesh_mm7",
            "mesh_mm8", "mesh_mm9", "mesh_mm10", "mesh_mm11", "mesh_mm12", "mesh_mm13", "mesh_mm14",
            "mesh_mm15", "mesh_mm16", "mesh_mm17", "mesh_mm18", "mesh_mm19", "mesh_mm20", "mesh_mm21",
            "mesh_mm22", "mesh_mm23", "mesh_mm24", "mesh_mm25", "mesh_mm26", "mesh_mm27", "mesh_mm28",
            "mesh_mm29", "mesh_mm31", "mesh_mm32"
        ];
    }

    var disposeWindowMeshes = function() {
        if (windowMeshes.length > 0) {
            var meshCount = scene.meshes.length - 1;
            for (var i = meshCount; i >= 0; i--) {
                if (windowMeshes.includes(scene.meshes[i].name) == true) {
                    scene.meshes[i].dispose();
                }
            }
            windowMeshes = [];
        }
    }

    var placeWindowModel = function(wall, windowSpace) {
        var meshCount = scene.meshes.length;
        for (var i = 0; i < meshCount; i++) {

            if (windowMeshNames.includes(scene.meshes[i].name) == true) {
                mesh2 = scene.meshes[i].clone(scene.meshes[i].name + i);
                windowMeshes.push(scene.meshes[i].name + i)

                switch (wall) {
                    case 0: {
                        mesh2.position.x = windowSpace.left - (width / 2);
                        mesh2.position.y = height - windowSpace.top - 1.375;
                        mesh2.position.z = 1.35;
                        mesh2.visibility = 1;
                        break;
                    }
                    case 1: {
                        mesh2.position.z = windowSpace.left;
                        mesh2.position.y = height - windowSpace.top - 1.375;
                        mesh2.position.x = width / 2 - 1.35;
                        mesh2.rotation.y = 4.71239;
                        mesh2.visibility = 1;
                        break;
                    }
                    case 2: {
                        mesh2.position.x = (width / 2) - windowSpace.left;
                        mesh2.position.y = height - windowSpace.top - 1.375;
                        mesh2.position.z = length - 1.35;
                        mesh2.rotation.y = 3.14159;
                        mesh2.visibility = 1;
                        break;
                    }
                    case 3: {
                        mesh2.position.z = length - windowSpace.left;
                        mesh2.position.y = height - windowSpace.top - 1.375;
                        mesh2.position.x = 1.35 - width / 2;
                        mesh2.rotation.y = 1.5708;
                        mesh2.visibility = 1;
                        break;
                    }
                }
            }
        }
    }

    var load3x7DoorModel = function() {
        BABYLON.SceneLoader.ImportMesh(
            "",
            "",
            //"single_door.obj",
            "3x7Single.obj",
            scene,
            function(meshes) {
                for (var i = 0; i < meshes.length; i++) {
                    // console.log(meshes[i].name);
                    // console.log(meshes[i].id);
                    meshes[i].visibility = 0;
                    meshes[i].scaling = new BABYLON.Vector3(1, 3.35, 3);
                    if (meshes[i].name == "frame_010_Plane.015") {
                        //meshes[i].material.diffuseColor = new BABYLON.Color3(0.95,0.95,0.95);
                        meshes[i].material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1],
                            trimColor[2]);
                    }
                    if (meshes[i].name == meshes[i].id == "door_010_Cylinder.003") {
                        meshes[i].material.diffuseColor = new BABYLON.Color3(0.95, 0.95, 0.95);
                    }
                    if (meshes[i].name == meshes[i].id == "handle_010_Cylinder.016") {
                        console.log("Coloring door handle");
                        meshes[i].material = new BABYLON.StandardMaterial("", scene);
                        meshes[i].material.diffuseColor = new BABYLON.Color3(0.667, 0.675, 0.698);
                    }

                }
            }
        );
        door3x7MeshNames = ["frame_010_Plane.015", "floor_plate_010_Cube.002", "door_010_Cylinder.003",
            "handle_010_Cylinder.016",
            "closer_door_010_Cube.006", "closer_hinge_door_010_Cube.007", "closer_hinge_frame_010_Cylinder.010",
            "closer_frame_010_Plane"
        ];
    };

    // var load3x7DoorModel = function() {
    //     BABYLON.SceneLoader.ImportMesh(
    //         "",
    //         "",
    //         "3x7Single.obj",
    //         scene,
    //         function(meshes) {
    //             for (var i = 0; i < meshes.length; i++) {
    //                 if (meshes[i].name === "frame_010_Plane.015") {
    //                     meshes[i].material.diffuseColor = new BABYLON.Color3(1, 0, 0); // Set to red color
    //                 }
    //             }
    //         }
    //     );
    //     door3x7MeshNames = ["frame_010_Plane.015", "floor_plate_010_Cube.002", "door_010_Cylinder.003",
    //         "handle_010_Cylinder.016",
    //         "closer_door_010_Cube.006", "closer_hinge_door_010_Cube.007", "closer_hinge_frame_010_Cylinder.010",
    //         "closer_frame_010_Plane"
    //     ];
    // };


    var load4x7DoorModel = function() {
        BABYLON.SceneLoader.ImportMesh(
            "",
            "",
            //"single_door_2.obj",
            "4x7Single.obj",
            scene,
            function(meshes) {
                for (var i = 0; i < meshes.length; i++) {
                    //console.log(meshes[i].name);
                    // if (meshes[i].name.includes("_010_"))
                    // {	meshes[i].name.replace("_010_", "_4x7_");	}
                    meshes[i].visibility = 0;
                    meshes[i].scaling = new BABYLON.Vector3(1, 3.35, 4);
                    if (meshes[i].name == "frame_4x7_Plane.015") {
                        //meshes[i].material.diffuseColor = new BABYLON.Color3(0.95,0.95,0.95);
                        meshes[i].material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1],
                            trimColor[2]);
                    }
                    if (meshes[i].name == "door_4x7_Cylinder.003") {
                        meshes[i].material.diffuseColor = new BABYLON.Color3(1, 1, 1);
                    }
                    if (meshes[i].name == meshes[i].id == "handle_B_014_Cylinder.033") {
                        //meshes[i].material.diffuseColor = new BABYLON.Color3(0.667, 0.675, 0.698);
                        meshes[i].material.diffuseColor = new BABYLON.Color3(1, 0, 0);
                    }
                }
            }
        );
        door4x7MeshNames = ["frame_4x7_Plane.015", "floor_plate_4x7_Cube.002", "door_4x7_Cylinder.003",
            "handle_4x7_Cylinder.016",
            "closer_door_4x7_Cube.006", "closer_hinge_door_4x7_Cube.007", "closer_hinge_frame_4x7_Cylinder.010",
            "closer_frame_4x7_Plane"
        ];

        // for (var j=0; j<scene.meshes.length; j++)
        // {	console.log(scene.meshes[j].name);	}
        // console.log(door4x7MeshNames);
    };

    var load6x7DoorModel = function() {
        BABYLON.SceneLoader.ImportMesh(
            "",
            "",
            "double_door.obj",
            scene,
            function(meshes) {
                for (var i = 0; i < meshes.length; i++) {
                    //console.log(meshes[i].name);
                    meshes[i].visibility = 0;
                    //meshes[i].scaling = new BABYLON.Vector3(1, 3.35, 3.1);
                    meshes[i].scaling = new BABYLON.Vector3(1, 3.35, 3.15);
                    if (meshes[i].name == "frame_014_Plane.018") {
                        meshes[i].material = new BABYLON.StandardMaterial("", scene);
                        //meshes[i].material.diffuseColor = new BABYLON.Color3(0.95,0.95,0.95);
                        meshes[i].material.diffuseColor = new BABYLON.Color3(trimColor[0], trimColor[1],
                            trimColor[2]);
                    }
                    if (meshes[i].name == "door_B_014_Cylinder.032") {
                        meshes[i].material = new BABYLON.StandardMaterial("", scene);
                        meshes[i].material.diffuseColor = new BABYLON.Color3(1, 1, 1);
                    }
                    if (meshes[i].name == "door_A_014_Cylinder.005") {
                        meshes[i].material = new BABYLON.StandardMaterial("", scene);
                        meshes[i].material.diffuseColor = new BABYLON.Color3(1, 1, 1);
                    }
                }
            }
        );
        door6x7MeshNames = ["frame_014_Plane.018", "floor_plate_double_014_Cube.031", "door_B_014_Cylinder.032",
            "closer_door_B_014_Cube.042",
            "closer_hinge_door_B_014_Cube.043", "closer_hinge_frame_B_014_Cylinder.064",
            "closer_frame_B_014_Plane.024", "handle_B_014_Cylinder.033",
            "door_A_014_Cylinder.005", "closer_door_A_014_Cube.040", "closer_hinge_door_A_014_Cube.041",
            "closer_hinge_frame_A_014_Cylinder.063",
            "closer_frame_A_014_Plane.023", "striker_014_Cylinder.031", "handle_A_014_Cylinder.030"
        ];
    };

    var loadRollupDoor = function() {
        BABYLON.SceneLoader.ImportMesh(
            "",
            "./roll_up_door_v001/",
            "roll_up_door_v001.obj",
            scene,
            function(meshes) {
                for (var i = 0; i < meshes.length; i++) {
                    meshes[i].material = new BABYLON.StandardMaterial("", scene);
                    meshes[i].material.diffuseColor = new BABYLON.Color3(0.95, 0.95, 0.95);
                    //meshes[i].material.diffuseTexture = new BABYLON.Texture("white.png", scene);
                    meshes[i].visibility = 0;
                }
            }
        );
    };

    var loadSectionalDoor = function() {
        BABYLON.SceneLoader.ImportMesh(
            //doorsArray[d],
            "",
            "./garage_door/",
            "garage_door_copy.obj",
            scene,
            function(meshes) {
                for (var i = 0; i < meshes.length; i++) {
                    meshes[i].material = new BABYLON.StandardMaterial("", scene);
                    meshes[i].material.diffuseColor = new BABYLON.Color3(0.95, 0.95, 0.95);
                    meshes[i].visibility = 0;
                }
            }
        );
    };

    var disposeDoorMeshes = function() {
        if (doorMeshes.length > 0) {
            var meshCount = scene.meshes.length - 1;
            for (var i = meshCount; i >= 0; i--) {
                if (doorMeshes.includes(scene.meshes[i].name) == true) {
                    scene.meshes[i].dispose();
                }
            }
            doorMeshes = [];
        }
    }

    var place3x7EDoorModel = function(wall, door, doorSpace) { // door handle

        var meshCount = scene.meshes.length;
        for (var i = 0; i < meshCount; i++) {

            if (door3x7MeshNames.includes(scene.meshes[i].name) == true) {
                var mesh2 = scene.meshes[i].clone(scene.meshes[i].name + i);
                if (scene.meshes[i].name == "handle_010_Cylinder.016") {
                    mesh2.material = new BABYLON.StandardMaterial("", scene);
                    mesh2.material.diffuseColor = new BABYLON.Color3(0.667, 0.675, 0.698);
                }
                doorMeshes.push(scene.meshes[i].name + i)

                switch (wall) {
                    case 0: {
                        mesh2.rotation.y = 1.5708;
                        mesh2.position.x = doorSpace.left - (width / 2) + 2.85;
                        mesh2.position.z = 0.115;
                        mesh2.visibility = 1;
                        break;
                    }
                    case 1: {
                        mesh2.position.x = width / 2 - 0.1;
                        mesh2.position.z = doorSpace.left + 2.85;
                        mesh2.visibility = 1;
                        break;
                    }
                    case 2: {
                        //mesh2.position.x = 7.15-doorSpace.left;
                        mesh2.position.x = (width / 2) - doorSpace.left - 2.85;
                        mesh2.position.z = length - 0.115;
                        mesh2.rotation.y = 4.71239;
                        mesh2.visibility = 1;
                        break;
                    }
                    case 3: {
                        mesh2.position.x = 0 - width / 2 + 0.115;
                        mesh2.position.z = length - doorSpace.left - 2.85;
                        mesh2.rotation.y = 3.14159;
                        mesh2.visibility = 1;
                        break;
                    }
                }
            }
        }
    };

    var place4x7EDoorModel = function(wall, door, doorSpace) {
        var meshCount = scene.meshes.length;
        for (var i = 0; i < meshCount; i++) {

            if (door4x7MeshNames.includes(scene.meshes[i].name) == true) {
                var mesh2 = scene.meshes[i].clone(scene.meshes[i].name + i);
                if (scene.meshes[i].name == "handle_4x7_Cylinder.016") {
                    mesh2.material = new BABYLON.StandardMaterial("", scene);
                    mesh2.material.diffuseColor = new BABYLON.Color3(0.667, 0.675, 0.698);
                }
                doorMeshes.push(scene.meshes[i].name + i)

                switch (wall) {
                    case 0: {
                        mesh2.rotation.y = 1.5708;
                        mesh2.position.x = doorSpace.left - (width / 2) + 3.85;
                        mesh2.position.z = 0.115;
                        mesh2.visibility = 1;
                        break;
                    }
                    case 1: {
                        mesh2.position.x = width / 2 - 0.1;
                        mesh2.position.z = doorSpace.left + 3.85;
                        mesh2.visibility = 1;
                        break;
                    }
                    case 2: {
                        //mesh2.position.x = 8.15-doorSpace.left;
                        mesh2.position.x = (width / 2) - doorSpace.left - 3.85;
                        mesh2.position.z = length - 0.115;
                        mesh2.rotation.y = 4.71239;
                        mesh2.visibility = 1;
                        break;
                    }
                    case 3: {
                        mesh2.position.x = 0 - width / 2 + 0.115;
                        mesh2.position.z = length - doorSpace.left - 3.85;
                        mesh2.rotation.y = 3.14159;
                        mesh2.visibility = 1;
                        break;
                    }
                }
            }
        }
    };

    var place6x7EDoorModel = function(wall, door, doorSpace) {
        //console.log("Place 6x7E Door Model");
        var meshCount = scene.meshes.length;
        for (var i = 0; i < meshCount; i++) {

            if (door6x7MeshNames.includes(scene.meshes[i].name) == true) {
                //console.log("Clone Door Mesh");
                var mesh2 = scene.meshes[i].clone(scene.meshes[i].name + i);
                if (scene.meshes[i].name == "handle_A_014_Cylinder.030" || scene.meshes[i].name ==
                    "handle_B_014_Cylinder.033" ||
                    scene.meshes[i].name == "closer_hinge_door_B_014_Cube.043" || scene.meshes[i].name ==
                    "closer_hinge_frame_B_014_Cylinder.064" ||
                    scene.meshes[i].name == "closer_frame_B_014_Plane.024" || scene.meshes[i].name ==
                    "closer_door_A_014_Cube.040" ||
                    scene.meshes[i].name == "closer_hinge_door_A_014_Cube.041" || scene.meshes[i].name ==
                    "closer_hinge_frame_A_014_Cylinder.063" ||
                    scene.meshes[i].name == "closer_door_B_014_Cube.042" || scene.meshes[i].name ==
                    "closer_frame_A_014_Plane.023") {
                    mesh2.material = new BABYLON.StandardMaterial("", scene);
                    mesh2.material.diffuseColor = new BABYLON.Color3(0.667, 0.675, 0.698);
                }
                doorMeshes.push(scene.meshes[i].name + i)

                switch (wall) {
                    case 0: {
                        mesh2.rotation.y = 1.5708;
                        mesh2.position.x = doorSpace.left - (width / 2) + 3;
                        mesh2.position.z = 4.7;
                        mesh2.visibility = 1;
                        break;
                    }
                    case 1: {
                        mesh2.position.x = width / 2 - 4.7;
                        mesh2.position.z = doorSpace.left + 3;
                        mesh2.visibility = 1;
                        break;
                    }
                    case 2: {
                        mesh2.position.x = (width / 2) - doorSpace.left - 3;
                        mesh2.position.z = length - 4.7;
                        mesh2.rotation.y = 4.71239;
                        mesh2.visibility = 1;
                        break;
                    }
                    case 3: {
                        mesh2.position.x = 0 - width / 2 + 4.7;
                        mesh2.position.z = length - doorSpace.left - 3;
                        mesh2.rotation.y = 3.14159;
                        mesh2.visibility = 1;
                        break;
                    }
                }
            }
        }
    };

    var placeSectionalDoorModel = function(wall, d, ds, scaling, frameScaling) {
        var meshCount = scene.meshes.length;
        var mesh2 = null;
        var meshes = [];
        alert("rrrrrrrrrrrrrrrrrrr")
        for (var i = 0; i < meshCount; i++) {
            if (scene.meshes[i].name == 'garage_door_mechanism_Cube.001' || scene.meshes[i].name ==
                'garage_door_Cube' || scene.meshes[i].name == "frame_014_Plane.018") {

                if (scene.meshes[i].name == "frame_014_Plane.018") {
                    meshes.push(scene.meshes[i].clone('SectionalFrame' + d.type + 1));
                    doorMeshes.push('SectionalFrame' + d.type + 1)
                    meshes[meshes.length - 1].scaling = frameScaling;
                    meshes[meshes.length - 1].visibility = 1;
                    switch (wall) {
                        case 0: {
                            meshes[meshes.length - 1].rotation.y = 1.5708;
                            meshes[meshes.length - 1].position.x = ds.left - (width / 2) + (d.width / 2);
                            meshes[meshes.length - 1].position.z = 9.4;
                            break;
                        }
                        case 1: {
                            meshes[meshes.length - 1].position.x = width / 2 - 9.4;
                            meshes[meshes.length - 1].position.z = ds.left + (d.width / 2);
                            break;
                        }
                        case 2: {
                            meshes[meshes.length - 1].position.x = (width / 2) - ds.left - (d.width / 2);
                            meshes[meshes.length - 1].position.z = length - 9.4;
                            meshes[meshes.length - 1].rotation.y = 4.71239;
                            break;
                        }
                        case 3: {
                            meshes[meshes.length - 1].position.x = 0 - width / 2 + 9.4;
                            meshes[meshes.length - 1].position.z = length - ds.left - (d.width / 2);
                            meshes[meshes.length - 1].rotation.y = 3.14159;
                            break;
                        }
                    }
                } else {
                    meshes.push(scene.meshes[i].clone('SectionalDoor' + d.type + 1));
                    doorMeshes.push('SectionalDoor' + d.type + 1)
                    meshes[meshes.length - 1].scaling = scaling;
                    meshes[meshes.length - 1].visibility = 1;
                    switch (wall) {
                        case 0: {
                            meshes[meshes.length - 1].position.x = 0 - width / 2 + d.width / 2 + ds.left;
                            meshes[meshes.length - 1].position.z = -1.2;
                            break;
                        }
                        case 1: {
                            meshes[meshes.length - 1].position.x = width / 2 + 1.2;
                            meshes[meshes.length - 1].position.z = d.width / 2 + ds.left;
                            meshes[meshes.length - 1].rotation.y = 4.71239;
                            break;
                        }
                        case 2: {
                            meshes[meshes.length - 1].position.x = width / 2 - d.width / 2 - ds.left;
                            meshes[meshes.length - 1].position.z = length + 1.2;
                            meshes[meshes.length - 1].rotation.y = 3.14159;
                            break;
                        }
                        case 3: {
                            meshes[meshes.length - 1].position.x = 0 - width / 2 - 1.2
                            meshes[meshes.length - 1].position.z = length - d.width / 2 - ds.left;
                            meshes[meshes.length - 1].rotation.y = 1.5708;
                            break;
                        }
                    }
                }
            }
        }
    };

    var placeRollupDoorModel = function(wall, d, ds, scaling, frameScaling) {
        var meshCount = scene.meshes.length;
        var mesh2 = null;
        var meshes = [];
        for (var i = 0; i < meshCount; i++) {
            if (scene.meshes[i].name == 'Circle001222' || scene.meshes[i].name == "frame_014_Plane.018") {

                if (scene.meshes[i].name == "frame_014_Plane.018") {
                    meshes.push(scene.meshes[i].clone('RollupFrame' + d.type + 1));
                    doorMeshes.push('RollupFrame' + d.type + 1)
                    meshes[meshes.length - 1].scaling = frameScaling;
                    meshes[meshes.length - 1].visibility = 1;
                    switch (wall) {
                        case 0: {
                            meshes[meshes.length - 1].rotation.y = 1.5708;
                            meshes[meshes.length - 1].position.x = ds.left - (width / 2) + (d.width / 2);
                            meshes[meshes.length - 1].position.z = 9.4;
                            break;
                        }
                        case 1: {
                            meshes[meshes.length - 1].position.x = width / 2 - 9.4;
                            meshes[meshes.length - 1].position.z = ds.left + (d.width / 2);
                            break;
                        }
                        case 2: {
                            meshes[meshes.length - 1].position.x = (width / 2) - ds.left - (d.width / 2);
                            meshes[meshes.length - 1].position.z = length - 9.4;
                            meshes[meshes.length - 1].rotation.y = 4.71239;
                            break;
                        }
                        case 3: {
                            meshes[meshes.length - 1].position.x = 0 - width / 2 + 9.4;
                            meshes[meshes.length - 1].position.z = length - ds.left - (d.width / 2);
                            meshes[meshes.length - 1].rotation.y = 3.14159;
                            break;
                        }
                    }
                } else {
                    meshes.push(scene.meshes[i].clone('RollupDoor' + d.type + 1));
                    meshes[meshes.length - 1].scaling = scaling;
                    meshes[meshes.length - 1].visibility = 1;
                    doorMeshes.push('RollupDoor' + d.type + 1)

                    switch (wall) {
                        case 0: {
                            meshes[meshes.length - 1].position.x = 0 - width / 2 + d.width / 2 + ds.left;
                            meshes[meshes.length - 1].position.z = 0.65;
                            break;
                        }
                        case 1: {
                            meshes[meshes.length - 1].position.x = width / 2 - 0.65;
                            meshes[meshes.length - 1].position.z = d.width / 2 + ds.left;
                            meshes[meshes.length - 1].rotation.y = 4.71239;
                            break;
                        }
                        case 2: {
                            meshes[meshes.length - 1].position.x = width / 2 - d.width / 2 - ds.left;
                            meshes[meshes.length - 1].position.z = length - 0.65;
                            meshes[meshes.length - 1].rotation.y = 3.14159;
                            break;
                        }
                        case 3: {
                            meshes[meshes.length - 1].position.x = 0 - width / 2 + 0.65;
                            meshes[meshes.length - 1].position.z = length - d.width / 2 - ds.left;
                            meshes[meshes.length - 1].rotation.y = 1.5708;
                            break;
                        }
                    }
                }
            }
        }
    };


    var buildFloor = function() {
        if (floor != null) {
            floor.dispose();
        }
        floor = BABYLON.MeshBuilder.CreateGround("ground", {
            width: width + 2 + leanTo[1].width + leanTo[3].width,
            height: length + 2 + Math.max(overhangLRFront, leanTo[0].width) + Math.max(overhangLRBack,
                leanTo[2].width),
            updatable: true
        });
        floorMaterial = new BABYLON.StandardMaterial("floor", scene);
        floorMaterial.diffuseTexture = new BABYLON.Texture("concrete.png", scene);
        floor.material = floorMaterial;
        floor.position.z = (length / 2) - ((Math.max(overhangLRFront, leanTo[0].width) - Math.max(overhangLRBack,
            leanTo[2].width)) / 2);
        floor.position.x = 0 - (leanTo[3].width / 2) + (leanTo[1].width / 2);
    };

    var buildPosts = function() {
        var post = null;

        for (var i = 0; i < gablePosts.length; i++) {
            gablePosts[i].dispose();
        }

        if (overhangLRFront > 0) {
            post = BABYLON.MeshBuilder.CreateBox("post", {
                height: height,
                width: 1 / 3,
                depth: 1 / 3
            }, scene);
            post.material = new BABYLON.StandardMaterial("", scene);
            post.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);
            post.position.x = -width / 2 + 0.2;
            post.position.z = -overhangLRFront + 0.2;
            post.position.y = height / 2;
            gablePosts.push(post);

            post = BABYLON.MeshBuilder.CreateBox("post", {
                height: height,
                width: 1 / 3,
                depth: 1 / 3
            }, scene);
            post.material = new BABYLON.StandardMaterial("", scene);
            post.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);
            post.position.x = width / 2 - 0.2;
            post.position.z = -overhangLRFront + 0.2;
            post.position.y = height / 2;
            gablePosts.push(post);

            if (overhangLRFront > 25) {
                post = BABYLON.MeshBuilder.CreateBox("post", {
                    height: height,
                    width: 1 / 3,
                    depth: 1 / 3
                }, scene);
                post.material = new BABYLON.StandardMaterial("", scene);
                post.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);
                post.position.x = -width / 2 + 0.2;
                post.position.z = -overhangLRFront / 2 + 0.2;
                post.position.y = height / 2;
                gablePosts.push(post);

                post = BABYLON.MeshBuilder.CreateBox("post", {
                    height: height,
                    width: 1 / 3,
                    depth: 1 / 3
                }, scene);
                post.material = new BABYLON.StandardMaterial("", scene);
                post.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);
                post.position.x = width / 2 - 0.2;
                post.position.z = -overhangLRFront / 2 + 0.2;
                post.position.y = height / 2;
                gablePosts.push(post);
            }

            // 					if (width > 25) {
            // 						post = BABYLON.MeshBuilder.CreateBox("post", {height:height+roofHeight-0.1, width:1/3, depth:1/3}, scene);
            // 						post.position.z = -overhangLRFront+0.2;
            // 						post.position.y = roofHeight/2+height/2;
            // 						gablePosts.push(post);

            // 						if (overhangLRFront > 25) {
            // 							post = BABYLON.MeshBuilder.CreateBox("post", {height:height+roofHeight-0.1, width:1/3, depth:1/3}, scene);
            // 							post.position.z = -overhangLRFront/2+0.2;
            // 							post.position.y = roofHeight/2+height/2;
            // 							gablePosts.push(post);
            // 						}
            // 					}
        }

        if (overhangLRBack > 0) {
            post = BABYLON.MeshBuilder.CreateBox("post", {
                height: height,
                width: 1 / 3,
                depth: 1 / 3
            }, scene);
            post.material = new BABYLON.StandardMaterial("", scene);
            post.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);
            post.position.x = -width / 2 + 0.2;
            post.position.z = length + overhangLRBack - 0.2;
            post.position.y = height / 2;
            gablePosts.push(post);

            post = BABYLON.MeshBuilder.CreateBox("post", {
                height: height,
                width: 1 / 3,
                depth: 1 / 3
            }, scene);
            post.material = new BABYLON.StandardMaterial("", scene);
            post.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);
            post.position.x = width / 2 - 0.2;
            post.position.z = length + overhangLRBack - 0.2;
            post.position.y = height / 2;
            gablePosts.push(post);

            if (overhangLRBack > 25) {
                post = BABYLON.MeshBuilder.CreateBox("post", {
                    height: height,
                    width: 1 / 3,
                    depth: 1 / 3
                }, scene);
                post.material = new BABYLON.StandardMaterial("", scene);
                post.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);
                post.position.x = -width / 2 + 0.2;
                post.position.z = length + overhangLRBack / 2 - 0.2;
                post.position.y = height / 2;
                gablePosts.push(post);

                post = BABYLON.MeshBuilder.CreateBox("post", {
                    height: height,
                    width: 1 / 3,
                    depth: 1 / 3
                }, scene);
                post.material = new BABYLON.StandardMaterial("", scene);
                post.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);
                post.position.x = width / 2 - 0.2;
                post.position.z = length + overhangLRBack / 2 - 0.2;
                post.position.y = height / 2;
                gablePosts.push(post);
            }

            // 					if (width > 25) {
            // 						post = BABYLON.MeshBuilder.CreateBox("post", {height:height+roofHeight-0.1, width:1/3, depth:1/3}, scene);
            // 						post.position.z = length+overhangLRBack-0.2;
            // 						post.position.y = roofHeight/2+height/2;
            // 						gablePosts.push(post);

            // 						if (overhangLRBack > 25) {
            // 							post = BABYLON.MeshBuilder.CreateBox("post", {height:height+roofHeight-0.1, width:1/3, depth:1/3}, scene);
            // 							post.position.z = length+overhangLRBack/2-0.2;
            // 							post.position.y = roofHeight/2+height/2;
            // 							gablePosts.push(post);
            // 						}
            // 					}
        }
    };

    var buildLeanTo = function(wall) {
        if (leanTo[wall].width == 0) {
            return;
        }

        var newCorners = [];
        var apexData = [];

        disposeLeanTo(wall);

        switch (wall) {
            case 0: {
                if (leanTo[wall].wrapLeft == 1) {
                    newCorners[0] = new BABYLON.Vector3(corners[0].x - leanTo[3].width, 0, 0 - leanTo[wall].width);
                } else {
                    newCorners[0] = new BABYLON.Vector3(corners[0].x + leanTo[wall].cut1, 0, 0 - leanTo[wall]
                        .width);
                }
                if (leanTo[wall].wrapRight == 1) {
                    newCorners[1] = new BABYLON.Vector3(corners[1].x + leanTo[1].width, 0, 0 - leanTo[wall].width);
                } else {
                    newCorners[1] = new BABYLON.Vector3(corners[1].x - leanTo[wall].cut2, 0, 0 - leanTo[wall]
                        .width);
                }
                newCorners[2] = new BABYLON.Vector3(corners[1].x - leanTo[wall].cut2, 0, 0);
                newCorners[3] = new BABYLON.Vector3(corners[0].x + leanTo[wall].cut1, 0, 0);
                apexData = [corners[0].x + leanTo[wall].cut1, 0, corners[1].x - leanTo[wall].cut2, 0];
                break;
            }
            case 1: {
                if (leanTo[wall].wrapLeft == 1) {
                    newCorners[0] = new BABYLON.Vector3(corners[1].x + leanTo[wall].width, 0, 0 - leanTo[0].width);
                } else {
                    newCorners[0] = new BABYLON.Vector3(corners[1].x + leanTo[wall].width, 0, 0 + leanTo[wall]
                        .cut1);
                }
                if (leanTo[wall].wrapRight == 1) {
                    newCorners[1] = new BABYLON.Vector3(corners[2].x + leanTo[wall].width, 0, 0 + length + leanTo[2]
                        .width);
                } else {
                    newCorners[1] = new BABYLON.Vector3(corners[2].x + leanTo[wall].width, 0, 0 + length - leanTo[
                        wall].cut2);
                }
                newCorners[2] = new BABYLON.Vector3(corners[2].x, 0, 0 + length - leanTo[wall].cut2);
                newCorners[3] = new BABYLON.Vector3(corners[1].x, 0, 0 + leanTo[wall].cut1);
                apexData = [corners[1].x, leanTo[wall].cut1, corners[2].x, length - leanTo[wall].cut2];
                break;
            }
            case 2: {
                if (leanTo[wall].wrapLeft == 1) {
                    newCorners[0] = new BABYLON.Vector3(corners[2].x + leanTo[1].width, 0, length + leanTo[wall]
                        .width);
                } else {
                    newCorners[0] = new BABYLON.Vector3(corners[2].x - leanTo[wall].cut1, 0, length + leanTo[wall]
                        .width);
                }
                if (leanTo[wall].wrapRight == 1) {
                    newCorners[1] = new BABYLON.Vector3(corners[3].x - leanTo[3].width, 0, length + leanTo[wall]
                        .width);
                } else {
                    newCorners[1] = new BABYLON.Vector3(corners[3].x + leanTo[wall].cut2, 0, length + leanTo[wall]
                        .width);
                }
                newCorners[2] = new BABYLON.Vector3(corners[3].x + leanTo[wall].cut2, 0, length);
                newCorners[3] = new BABYLON.Vector3(corners[2].x - leanTo[wall].cut1, 0, length);
                apexData = [corners[2].x - leanTo[wall].cut1, length, corners[3].x + leanTo[wall].cut2, length];
                break;
            }
            case 3: {
                if (leanTo[wall].wrapLeft == 1) {
                    newCorners[0] = new BABYLON.Vector3(corners[3].x - leanTo[wall].width, 0, length + leanTo[2]
                        .width);
                } else {
                    newCorners[0] = new BABYLON.Vector3(corners[3].x - leanTo[wall].width, 0, length - leanTo[wall]
                        .cut1);
                }
                if (leanTo[wall].wrapRight == 1) {
                    newCorners[1] = new BABYLON.Vector3(corners[0].x - leanTo[wall].width, 0, 0 - leanTo[0].width);
                } else {
                    newCorners[1] = new BABYLON.Vector3(corners[0].x - leanTo[wall].width, 0, 0 + leanTo[wall]
                        .cut2);
                }
                newCorners[2] = new BABYLON.Vector3(corners[0].x, 0, 0 + leanTo[wall].cut2);
                newCorners[3] = new BABYLON.Vector3(corners[3].x, 0, length - leanTo[wall].cut2);
                apexData = [corners[3].x, length - leanTo[wall].cut1, corners[0].x, leanTo[wall].cut2];
                break;
            }
        }

        leanToCorners[wall] = newCorners;

        //var rHeight = height-leanTo[wall].drop-1;				
        var rHeight = height - leanTo[wall].drop - (leanTo[wall].pitch * 0.5);
        var overlap = 0;
        var wholeRoofprint = roofprintLeanTo(leanToCorners[wall], 0, rHeight);
        var apexes = [];

        for (var i = 0; i < apexData.length / 2; i++) {
            apexes.push(new BABYLON.Vector2(apexData[2 * i], apexData[2 * i + 1]))
        }
        var planesLT = [
            ["C0", "C1", "A1", "A0"],
        ];

        switch (wall) {
            case 0: {
                //fLeanToMesh = roof(wholeRoofprint, apexes, planesLT, leanTo[wall].pitch*0.83333, rHeight, 5.6, fLeanToMesh, "fLeanToMesh"+wall );
                fLeanToMesh = roof(wholeRoofprint, apexes, planesLT, leanTo[wall].pitch * 0.5, rHeight, 5.6,
                    fLeanToMesh, "fLeanToMesh" + wall);
                fLeanToMesh.material = new BABYLON.StandardMaterial("", scene);
                //fLeanToMesh.material.diffuseColor = new BABYLON.Color3(roofColor[0], roofColor[1], roofColor[2]);
                fLeanToMesh.material.bumpTexture = new BABYLON.Texture("roof_panel_normal.png", scene);
                fLeanToMesh.material.invertNormalMapX = true;
                break;
            }
            case 1: {
                //rLeanToMesh = roof(wholeRoofprint, apexes, planesLT, leanTo[wall].pitch*0.83333, rHeight, 5.6, rLeanToMesh, "rLeanToMesh"+wall );
                rLeanToMesh = roof(wholeRoofprint, apexes, planesLT, leanTo[wall].pitch * 0.5, rHeight, 5.6,
                    rLeanToMesh, "rLeanToMesh" + wall);
                rLeanToMesh.material = new BABYLON.StandardMaterial("", scene);
                //rLeanToMesh.material.diffuseColor = new BABYLON.Color3(roofColor[0], roofColor[1], roofColor[2]);
                rLeanToMesh.material.bumpTexture = new BABYLON.Texture("roof_panel_normal.png", scene);
                rLeanToMesh.material.invertNormalMapX = true;
                break;
            }
            case 2: {
                //bLeanToMesh = roof(wholeRoofprint, apexes, planesLT, leanTo[wall].pitch*0.83333, rHeight, 5.6, bLeanToMesh, "bLeanToMesh"+wall );
                bLeanToMesh = roof(wholeRoofprint, apexes, planesLT, leanTo[wall].pitch * 0.5, rHeight, 5.6,
                    bLeanToMesh, "bLeanToMesh" + wall);
                bLeanToMesh.material = new BABYLON.StandardMaterial("", scene);
                //bLeanToMesh.material.diffuseColor = new BABYLON.Color3(roofColor[0], roofColor[1], roofColor[2]);
                bLeanToMesh.material.bumpTexture = new BABYLON.Texture("roof_panel_normal.png", scene);
                bLeanToMesh.material.invertNormalMapX = true;
                break;
            }
            case 3: {
                //lLeanToMesh = roof(wholeRoofprint, apexes, planesLT, leanTo[wall].pitch*0.83333, rHeight, 5.6, lLeanToMesh, "lLeanToMesh"+wall );
                lLeanToMesh = roof(wholeRoofprint, apexes, planesLT, leanTo[wall].pitch * 0.5, rHeight, 5.6,
                    lLeanToMesh, "lLeanToMesh" + wall);
                lLeanToMesh.material = new BABYLON.StandardMaterial("", scene);
                //lLeanToMesh.material.diffuseColor = new BABYLON.Color3(roofColor[0], roofColor[1], roofColor[2]);
                lLeanToMesh.material.bumpTexture = new BABYLON.Texture("roof_panel_normal.png", scene);
                lLeanToMesh.material.invertNormalMapX = true;
                break;
            }
        }

        buildLeanToPosts(wall);
        buildFloor();
    };

    var rebuildAllLeanTo = function() {
        for (var i = 0; i < 4; i++) {
            buildLeanTo(i);
        }
    };

    var buildLeanToPosts = function(wall) {
        var post = null;
        var leanToLength = 0;

        switch (wall) {
            case 0: {
                leanToLength = leanToCorners[wall][1].x - leanToCorners[wall][0].x
                break;
            }
            case 1: {
                leanToLength = leanToCorners[wall][1].z - leanToCorners[wall][0].z
                break;
            }
            case 2: {
                leanToLength = leanToLength = leanToCorners[wall][0].x - leanToCorners[wall][1].x
                break;
            }
            case 3: {
                leanToLength = leanToCorners[wall][0].z - leanToCorners[wall][1].z
                break;
            }
        }

        if (leanTo[wall].width > 0) {
            post = BABYLON.MeshBuilder.CreateBox("post", {
                height: height - leanTo[wall].drop - (leanTo[wall].pitch * 0.5),
                width: 1 / 3,
                depth: 1 / 3
            }, scene);
            post.material = new BABYLON.StandardMaterial("", scene);
            post.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);
            switch (wall) {
                case 0: {
                    post.position.x = leanToCorners[wall][0].x + 0.2;
                    post.position.z = leanToCorners[wall][0].z + 0.2;
                    break;
                }
                case 1: {
                    post.position.x = leanToCorners[wall][0].x - 0.2;
                    post.position.z = leanToCorners[wall][0].z + 0.2;
                    break;
                }
                case 2: {
                    post.position.x = leanToCorners[wall][0].x - 0.2;
                    post.position.z = leanToCorners[wall][0].z - 0.2;
                    break;
                }
                case 3: {
                    post.position.x = leanToCorners[wall][0].x + 0.2;
                    post.position.z = leanToCorners[wall][0].z - 0.2;
                    break;
                }
            }

            post.position.y = (height - leanTo[wall].drop - (leanTo[wall].pitch * 0.5)) / 2
            leanToPosts[wall].push(post);

            post = BABYLON.MeshBuilder.CreateBox("post", {
                height: height - leanTo[wall].drop - (leanTo[wall].pitch * 0.5),
                width: 1 / 3,
                depth: 1 / 3
            }, scene);
            post.material = new BABYLON.StandardMaterial("", scene);
            post.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);
            switch (wall) {
                case 0: {
                    post.position.x = leanToCorners[wall][1].x - 0.2;
                    post.position.z = leanToCorners[wall][1].z + 0.2;
                    break;
                }
                case 1: {
                    post.position.x = leanToCorners[wall][1].x - 0.2;
                    post.position.z = leanToCorners[wall][1].z - 0.2;
                    break;
                }
                case 2: {
                    post.position.x = leanToCorners[wall][1].x + 0.2;
                    post.position.z = leanToCorners[wall][1].z - 0.2;
                    break;
                }
                case 3: {
                    post.position.x = leanToCorners[wall][1].x + 0.2;
                    post.position.z = leanToCorners[wall][1].z + 0.2;
                    break;
                }
            }

            post.position.y = (height - leanTo[wall].drop - (leanTo[wall].pitch * 0.5)) / 2
            leanToPosts[wall].push(post);

            if (wall % 2 == 0) {
                //if (width-leanTo[wall].cut1-leanTo[wall].cut2 > 50)	{
                if (leanToLength > 50) {
                    post = BABYLON.MeshBuilder.CreateBox("post", {
                        height: height - leanTo[wall].drop - (leanTo[wall].pitch * 0.5),
                        width: 1 / 3,
                        depth: 1 / 3
                    }, scene);
                    post.material = new BABYLON.StandardMaterial("", scene);
                    post.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);
                    post.position.x = 0 - (Math.abs(leanToCorners[wall][0].x) + Math.abs(leanToCorners[wall][1]
                        .x)) / 3 / 2;
                    if (wall == 0) {
                        post.position.z = leanToCorners[wall][1].z + 0.2;
                    } else {
                        post.position.z = leanToCorners[wall][1].z - 0.2;
                    }
                    post.position.y = (height - leanTo[wall].drop - (leanTo[wall].pitch * 0.5)) / 2
                    leanToPosts[wall].push(post);

                    post = BABYLON.MeshBuilder.CreateBox("post", {
                        height: height - leanTo[wall].drop - (leanTo[wall].pitch * 0.5),
                        width: 1 / 3,
                        depth: 1 / 3
                    }, scene);
                    post.material = new BABYLON.StandardMaterial("", scene);
                    post.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);
                    post.position.x = 0 + (Math.abs(leanToCorners[wall][0].x) + Math.abs(leanToCorners[wall][1]
                        .x)) / 3 / 2;
                    if (wall == 0) {
                        post.position.z = leanToCorners[wall][1].z + 0.2;
                    } else {
                        post.position.z = leanToCorners[wall][1].z - 0.2;
                    }
                    post.position.y = (height - leanTo[wall].drop - (leanTo[wall].pitch * 0.5)) / 2
                    leanToPosts[wall].push(post);
                }
                //else if (width-leanTo[wall].cut1-leanTo[wall].cut2 > 25)	{
                else if (leanToLength > 25) {
                    post = BABYLON.MeshBuilder.CreateBox("post", {
                        height: height - leanTo[wall].drop - (leanTo[wall].pitch * 0.5),
                        width: 1 / 3,
                        depth: 1 / 3
                    }, scene);
                    post.material = new BABYLON.StandardMaterial("", scene);
                    post.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);

                    switch (wall) {
                        case 0: {
                            post.position.x = (leanToCorners[wall][0].x + leanToCorners[wall][1].x) / 2;
                            post.position.z = leanToCorners[wall][1].z + 0.2;
                            break;
                        }
                        case 2: {
                            post.position.x = (leanToCorners[wall][0].x + leanToCorners[wall][1].x) / 2;
                            post.position.z = leanToCorners[wall][1].z - 0.2;
                            break;
                        }
                    }

                    post.position.y = (height - leanTo[wall].drop - (leanTo[wall].pitch * 0.5)) / 2
                    leanToPosts[wall].push(post);
                }
            } else {
                //if (length-leanTo[wall].cut1-leanTo[wall].cut2 > 50)	{
                if (leanToLength > 50) {
                    var numPosts = 0;
                    wrapWidth = 0;
                    if (leanTo[wall].wrapLeft) {
                        switch (wall) {
                            case 1: {
                                wrapWidth += leanTo[0].width;
                                break;
                            }
                            case 3: {
                                wrapWidth += leanTo[2].width;
                                break;
                            }
                        }
                    }
                    if (leanTo[wall].wrapRight) {
                        switch (wall) {
                            case 1: {
                                wrapWidth += leanTo[2].width;
                                break;
                            }
                            case 3: {
                                wrapWidth += leanTo[0].width;
                                break;
                            }
                        }
                    }
                    numPosts = Math.ceil((length - leanTo[wall].cut1 - leanTo[wall].cut2 + wrapWidth) / 25);

                    for (var i = 0; i < numPosts - 1; i++) {
                        post = BABYLON.MeshBuilder.CreateBox("post", {
                            height: height - leanTo[wall].drop - (leanTo[wall].pitch * 0.5),
                            width: 1 / 3,
                            depth: 1 / 3
                        }, scene);
                        post.material = new BABYLON.StandardMaterial("", scene);
                        post.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);

                        switch (wall) {
                            case 1: {
                                post.position.x = leanToCorners[wall][1].x - 0.2;
                                if (leanTo[wall].wrapLeft) {
                                    post.position.z = (leanToCorners[wall][1].z - leanToCorners[wall][0].z) /
                                        parseFloat(numPosts) * (i + 1) - leanTo[0].width;
                                } else {
                                    post.position.z = (leanToCorners[wall][1].z - leanToCorners[wall][0].z) /
                                        parseFloat(numPosts) * (i + 1);
                                }
                                break;
                            }
                            case 3: {
                                post.position.x = leanToCorners[wall][1].x + 0.2;
                                if (leanTo[wall].wrapRight) {
                                    post.position.z = (leanToCorners[wall][0].z - leanToCorners[wall][1].z) /
                                        parseFloat(numPosts) * (i + 1) - leanTo[0].width;
                                } else {
                                    post.position.z = (leanToCorners[wall][0].z - leanToCorners[wall][1].z) /
                                        parseFloat(numPosts) * (i + 1);
                                }
                                break;
                            }
                        }

                        post.position.y = (height - leanTo[wall].drop - (leanTo[wall].pitch * 0.5)) / 2
                        leanToPosts[wall].push(post);
                    }
                }
                //else if (length-leanTo[wall].cut1-leanTo[wall].cut2 > 25)	{
                else if (leanToLength > 25) {
                    post = BABYLON.MeshBuilder.CreateBox("post", {
                        height: height - leanTo[wall].drop - (leanTo[wall].pitch * 0.5),
                        width: 1 / 3,
                        depth: 1 / 3
                    }, scene);
                    post.material = new BABYLON.StandardMaterial("", scene);
                    post.material.diffuseColor = new BABYLON.Color3(wallColor[0], wallColor[1], wallColor[2]);

                    switch (wall) {
                        case 1: {
                            post.position.x = leanToCorners[wall][1].x - 0.2;
                            post.position.z = (leanToCorners[wall][0].z + leanToCorners[wall][1].z) / 2;
                            break;
                        }
                        case 3: {
                            post.position.x = leanToCorners[wall][1].x + 0.2;
                            post.position.z = (leanToCorners[wall][0].z + leanToCorners[wall][1].z) / 2;
                            break;
                        }
                    }

                    post.position.y = (height - leanTo[wall].drop - (leanTo[wall].pitch * 0.5)) / 2
                    leanToPosts[wall].push(post);
                }
            }
        }
    };

    var disposeLeanTo = function(wall) {
        switch (wall) {
            case 0: {
                if (fLeanToMesh != null) {
                    fLeanToMesh.dispose();
                }
                break;
            }
            case 1: {
                if (rLeanToMesh != null) {
                    rLeanToMesh.dispose();
                }
                break;
            }
            case 2: {
                if (bLeanToMesh != null) {
                    bLeanToMesh.dispose();
                }
                break;
            }
            case 3: {
                if (lLeanToMesh != null) {
                    lLeanToMesh.dispose();
                }
                break;
            }
        }
        for (var i = 0; i < leanToPosts[wall].length; i++) {
            leanToPosts[wall][i].dispose();
        }
    };

    var addWindow = function(wall) {
        var wsLeft = 1;
        var windowLimit = length;
        if (wall % 2 == 0) {
            windowLimit = width;
        }
        if (defaultWindow == null) {
            defaultWindow = new windowObj(3.0, 3.0);
        }
        if (windowSpaces[wall].length == 0) {
            switch (wall) {
                case 0: {
                    document.querySelector('#remWin0').style.visibility = 'visible';
                    document.querySelector('#nWinArrow0').style.visibility = 'visible';
                    document.querySelector('#sWinArrow0').style.visibility = 'visible';
                    document.querySelector('#eWinArrow0').style.visibility = 'visible';
                    document.querySelector('#wWinArrow0').style.visibility = 'visible';
                    break;
                }
                case 1: {
                    document.querySelector('#remWin1').style.visibility = 'visible';
                    document.querySelector('#nWinArrow1').style.visibility = 'visible';
                    document.querySelector('#sWinArrow1').style.visibility = 'visible';
                    document.querySelector('#eWinArrow1').style.visibility = 'visible';
                    document.querySelector('#wWinArrow1').style.visibility = 'visible';
                    break;
                }
                case 2: {
                    document.querySelector('#remWin2').style.visibility = 'visible';
                    document.querySelector('#nWinArrow2').style.visibility = 'visible';
                    document.querySelector('#sWinArrow2').style.visibility = 'visible';
                    document.querySelector('#eWinArrow2').style.visibility = 'visible';
                    document.querySelector('#wWinArrow2').style.visibility = 'visible';
                    break;
                }
                case 3: {
                    document.querySelector('#remWin3').style.visibility = 'visible';
                    document.querySelector('#nWinArrow3').style.visibility = 'visible';
                    document.querySelector('#sWinArrow3').style.visibility = 'visible';
                    document.querySelector('#eWinArrow3').style.visibility = 'visible';
                    document.querySelector('#wWinArrow3').style.visibility = 'visible';
                    break;
                }
            }
            ws = new windowSpace(defaultWindow, 1, 1);
            while (checkWindowPosition(wall, ws, defaultWindow) == false && wsLeft < windowLimit + 1) {
                wsLeft += 1;
                ws = new windowSpace(defaultWindow, wsLeft, 1);
            }
            if (checkWindowPosition(wall, ws, defaultWindow) == true) {
                windowSpaces[wall] = [ws];
            } else {
                alert('Window cannot be placed on this wall.');
                return;
            }

        } else {
            ws0 = windowSpaces[wall][windowSpaces[wall].length - 1];
            //wsLeft = ws0.left+defaultWindow.width+1;
            //ws1 = new windowSpace(defaultWindow, wsLeft, 1);
            wsLeft = 1;
            ws1 = new windowSpace(defaultWindow, wsLeft, 1);
            while (checkWindowPosition(wall, ws1, defaultWindow) == false && wsLeft < windowLimit + 1) {
                wsLeft += 1;
                ws1 = new windowSpace(defaultWindow, wsLeft, 1);
            }
            switch (wall) {
                case 0:
                case 2: {
                    if (ws1.left + defaultWindow.width >= width) {
                        alert('Cannot add window');
                    } else {
                        if (checkWindowPosition(wall, ws1, defaultWindow) == true) {
                            windowSpaces[wall].push(ws1);
                        } else {
                            alert('Window cannot be placed on this wall.');
                            return;
                        }
                    }
                    break;
                }
                case 1:
                case 3: {
                    if (ws1.left + defaultWindow.width >= length) {
                        alert('Cannot add window');
                    } else {
                        if (checkWindowPosition(wall, ws1, defaultWindow) == true) {
                            windowSpaces[wall].push(ws1);
                        } else {
                            alert('Window cannot be placed on this wall.');
                            return;
                        }
                    }
                    break;
                }
            }
        }
        rebuildWalls(house);
    };

    var removeWindow = function(wall) {
        if (windowSpaces[wall].length == 0) {
            alert("No windows to remove on that wall.");
            return;
        } else {
            windowSpaces[wall].pop();
            if (windowSpaces[wall].length == 0) {
                switch (wall) {
                    case 0: {
                        document.querySelector('#remWin0').style.visibility = 'hidden';
                        document.querySelector('#nWinArrow0').style.visibility = 'hidden';
                        document.querySelector('#sWinArrow0').style.visibility = 'hidden';
                        document.querySelector('#eWinArrow0').style.visibility = 'hidden';
                        document.querySelector('#wWinArrow0').style.visibility = 'hidden';
                        break;
                    }
                    case 1: {
                        document.querySelector('#remWin1').style.visibility = 'hidden';
                        document.querySelector('#nWinArrow1').style.visibility = 'hidden';
                        document.querySelector('#sWinArrow1').style.visibility = 'hidden';
                        document.querySelector('#eWinArrow1').style.visibility = 'hidden';
                        document.querySelector('#wWinArrow1').style.visibility = 'hidden';
                        break;
                    }
                    case 2: {
                        document.querySelector('#remWin2').style.visibility = 'hidden';
                        document.querySelector('#nWinArrow2').style.visibility = 'hidden';
                        document.querySelector('#sWinArrow2').style.visibility = 'hidden';
                        document.querySelector('#eWinArrow2').style.visibility = 'hidden';
                        document.querySelector('#wWinArrow2').style.visibility = 'hidden';
                        break;
                    }
                    case 3: {
                        document.querySelector('#remWin3').style.visibility = 'hidden';
                        document.querySelector('#nWinArrow3').style.visibility = 'hidden';
                        document.querySelector('#sWinArrow3').style.visibility = 'hidden';
                        document.querySelector('#eWinArrow3').style.visibility = 'hidden';
                        document.querySelector('#wWinArrow3').style.visibility = 'hidden';
                        break;
                    }
                }
            }
        }
        rebuildWalls(house);
    };

    var windowLeft = function(wall) {
        if (windowSpaces[wall][windowSpaces[wall].length - 1].left == 1) {
            alert("Window cannot be moved further left.");
            return;
        }
        windowSpaces[wall][windowSpaces[wall].length - 1].left = windowSpaces[wall][windowSpaces[wall].length - 1]
            .left - 0.5;
        w = defaultWindow;
        ws = windowSpaces[wall][windowSpaces[wall].length - 1];
        if (checkWindowMovement(wall, ws, w) == true) {
            rebuildWalls(house);
        } else {
            windowSpaces[wall][windowSpaces[wall].length - 1].left = windowSpaces[wall][windowSpaces[wall].length -
                1
            ].left + 0.5;
            alert("Window cannot be moved further left.");
            return;
        }
    };

    var windowRight = function(wall) {
        if (wall % 2 == 0 && windowSpaces[wall][windowSpaces[wall].length - 1].left == width - 4) {
            alert("Window cannot be moved further right.");
            return;
        }
        if (wall % 2 != 0 && windowSpaces[wall][windowSpaces[wall].length - 1].left == length - 4) {
            alert("Window cannot be moved further right.");
            return;
        }
        windowSpaces[wall][windowSpaces[wall].length - 1].left = windowSpaces[wall][windowSpaces[wall].length - 1]
            .left + 0.5;
        w = defaultWindow;
        ws = windowSpaces[wall][windowSpaces[wall].length - 1];
        if (checkWindowMovement(wall, ws, w) == true) {
            rebuildWalls(house);
        } else {
            windowSpaces[wall][windowSpaces[wall].length - 1].left = windowSpaces[wall][windowSpaces[wall].length -
                1
            ].left - 0.5;
            alert("Window cannot be moved further right.");
            return;
        }
    }

    var windowUp = function(wall) {
        if (windowSpaces[wall][windowSpaces[wall].length - 1].top == 1) {
            alert("Window cannot be moved further up.");
            return;
        }
        windowSpaces[wall][windowSpaces[wall].length - 1].top = windowSpaces[wall][windowSpaces[wall].length - 1]
            .top - 0.5;
        w = defaultWindow;
        ws = windowSpaces[wall][windowSpaces[wall].length - 1];
        if (checkWindowMovement(wall, ws, w) == true) {
            rebuildWalls(house);
        } else {
            windowSpaces[wall][windowSpaces[wall].length - 1].top = windowSpaces[wall][windowSpaces[wall].length -
                1
            ].top + 0.5;
            alert("Window cannot be moved further up.");
            return;
        }
    };

    var windowDown = function(wall) {
        if (windowSpaces[wall][windowSpaces[wall].length - 1].top == height - 4) {
            alert("Window cannot be moved further down.");
            return;
        }
        windowSpaces[wall][windowSpaces[wall].length - 1].top = windowSpaces[wall][windowSpaces[wall].length - 1]
            .top + 0.5;
        w = defaultWindow;
        ws = windowSpaces[wall][windowSpaces[wall].length - 1];
        if (checkWindowMovement(wall, ws, w) == true) {
            rebuildWalls(house);
        } else {
            windowSpaces[wall][windowSpaces[wall].length - 1].top = windowSpaces[wall][windowSpaces[wall].length -
                1
            ].top - 0.5;
            alert("Window cannot be moved further down.");
            return;
        }
    };

    var addDoor = function(wall, doorSize, doorColor) {
        var dsLeft = 1;

        switch (doorSize) {
            case "3x7 Single Door":
                defaultDoor = new door(3.0, 7.0, doorSize, doorColor);
                break;
            case "4x7 Single Door":
                defaultDoor = new door(4.0, 7.0, doorSize, doorColor);
                break;
            case "6x7 Double Door":
                defaultDoor = new door(6.0, 7.0, doorSize, doorColor);
                break;
            case "8x8 Sectional":
                defaultDoor = new door(8.0, 8.0, doorSize, doorColor);
                break;
            case "8x10 Sectional":
                defaultDoor = new door(8.0, 10.0, doorSize, doorColor);
                break;
            case "10x8 Sectional":
                defaultDoor = new door(10.0, 8.0, doorSize, doorColor);
                break;
            case "10x10 Sectional":
                defaultDoor = new door(10.0, 10.0, doorSize, doorColor);
                break;
            case "12x8 Sectional":
                defaultDoor = new door(12.0, 8.0, doorSize, doorColor);
                break;
            case "8x8 Roll Up":
                defaultDoor = new door(8.0, 8.0, doorSize, doorColor);
                break;
            case "8x10 Roll Up":
                defaultDoor = new door(8.0, 10.0, doorSize, doorColor);
                break;
            case "10x8 Roll Up":
                defaultDoor = new door(10.0, 8.0, doorSize, doorColor);
                break;
            case "10x10 Roll Up":
                defaultDoor = new door(10.0, 10.0, doorSize, doorColor);
                break;
            case "10x12 Roll Up":
                defaultDoor = new door(10.0, 12.0, doorSize, doorColor);
                break;
            case "10x14 Roll Up":
                defaultDoor = new door(10.0, 14.0, doorSize, doorColor);
                break;
            case "12x8 Roll Up":
                defaultDoor = new door(12.0, 8.0, doorSize, doorColor);
                break;
            case "12x10 Roll Up":
                defaultDoor = new door(12.0, 10.0, doorSize, doorColor);
                break;
            case "12x12 Roll Up":
                defaultDoor = new door(12.0, 12.0, doorSize, doorColor);
                break;
            case "12x14 Roll Up":
                defaultDoor = new door(12.0, 14.0, doorSize, doorColor);
                break;
            case "14x8 Roll Up":
                defaultDoor = new door(14.0, 8.0, doorSize, doorColor);
                break;
            case "14x10 Roll Up":
                defaultDoor = new door(14.0, 10.0, doorSize, doorColor);
                break;
            case "14x12 Roll Up":
                defaultDoor = new door(14.0, 12.0, doorSize, doorColor);
                break;
            case "14x14 Roll Up":
                defaultDoor = new door(14.0, 14.0, doorSize, doorColor);
                break;
        }

        if (defaultDoor.height > height - 1) {
            alert('Cannot add door. Height exceeds building height.');
            return;
        }

        var doorLimit = length;
        if (wall % 2 == 0) {
            doorLimit = width;
        }

        if (doorSpaces[wall].length == 0) {
            ds = new doorSpace(defaultDoor, dsLeft);
            while (checkDoorPosition(wall, ds, defaultDoor) == false && dsLeft + defaultDoor.width < doorLimit +
                1) {
                dsLeft += 1;
                ds = new doorSpace(defaultDoor, dsLeft);
            }
            switch (wall) {
                case 0:
                case 2: {
                    if (dsLeft + defaultDoor.width + 1 > width) {
                        alert('Cannot add door. Door width exceeds building width.');
                        return;
                    } else {
                        if (checkDoorPosition(wall, ds, defaultDoor) == true) {
                            doors[wall].push(defaultDoor);
                            doorSpaces[wall].push(ds);
                        } else {
                            alert('Door cannot be placed on this wall.');
                            return;
                        }
                    }
                    break;
                }
                case 1:
                case 3: {
                    if (dsLeft + defaultDoor.width + 1 > length) {
                        alert('Cannot add door. Door width exceeds building width.');
                        return;
                    } else {
                        if (checkDoorPosition(wall, ds, defaultDoor) == true) {
                            doors[wall].push(defaultDoor);
                            doorSpaces[wall].push(ds);
                        } else {
                            alert('Door cannot be placed on this wall.');
                            return;
                        }
                    }
                    break;
                }
            }
            switch (wall) {
                case 0: {
                    document.querySelector('#remDoor0').style.visibility = 'visible';
                    document.querySelector('#eDoorArrow0').style.visibility = 'visible';
                    document.querySelector('#wDoorArrow0').style.visibility = 'visible';
                    break;
                }
                case 1: {
                    document.querySelector('#remDoor1').style.visibility = 'visible';
                    document.querySelector('#eDoorArrow1').style.visibility = 'visible';
                    document.querySelector('#wDoorArrow1').style.visibility = 'visible';
                    break;
                }
                case 2: {
                    document.querySelector('#remDoor2').style.visibility = 'visible';
                    document.querySelector('#eDoorArrow2').style.visibility = 'visible';
                    document.querySelector('#wDoorArrow2').style.visibility = 'visible';
                    break;
                }
                case 3: {
                    document.querySelector('#remDoor3').style.visibility = 'visible';
                    document.querySelector('#eDoorArrow3').style.visibility = 'visible';
                    document.querySelector('#wDoorArrow3').style.visibility = 'visible';
                    break;
                }
            }
        } else {
            alert("effffffffffffffffff")
            ds0 = doorSpaces[wall][doorSpaces[wall].length - 1];
            d = doors[wall][doors[wall].length - 1];
            dsLeft = ds0.left + d.width + 1;
            ds1 = new doorSpace(defaultDoor, dsLeft);
            while (checkDoorPosition(wall, ds1, defaultDoor) == false && dsLeft + defaultDoor.width <
                doorLimit +
                1) {
                dsLeft += 1;
                ds1 = new doorSpace(defaultDoor, dsLeft);
            }
            switch (wall) {
                case 0:
                case 2: {
                    if (dsLeft + defaultDoor.width + 1 > width) {
                        alert('Cannot add door. Door width exceeds building width.');
                    } else {
                        if (checkDoorPosition(wall, ds1, defaultDoor) == true) {
                            doors[wall].push(defaultDoor);
                            doorSpaces[wall].push(ds1);
                        } else {
                            alert('Door cannot be placed on this wall.');
                            return;
                        }
                    }
                    break;
                }
                case 1:
                case 3: {
                    if (dsLeft + defaultDoor.width + 1 > length) {
                        alert('Cannot add door. Door width exceeds building width.');
                    } else {
                        if (checkDoorPosition(wall, ds1, defaultDoor) == true) {
                            doors[wall].push(defaultDoor);
                            doorSpaces[wall].push(ds1);
                        } else {
                            alert('Door cannot be placed on this wall.');
                            return;
                        }
                    }
                    break;
                }
            }
        }
        alert("efgasdfasdf")
        console.log(house)
        rebuildWalls(house);
    };

    var checkDoorPosition = function(wall, doorSpace, door, isMoving = false) {
        if (isMoving == true) {
            doorCount = doorSpaces[wall].length - 1;
        } else {
            doorCount = doorSpaces[wall].length;
        }
        if (doorSpaces[wall].length > 0) {
            for (ds = 0; ds < doorCount; ds++) {
                dSpace = doorSpaces[wall][ds];
                d = doors[wall][ds];
                if (dSpace.left + d.width + 1 > doorSpace.left) {
                    return false;
                }
            }
        }

        windowCount = windowSpaces[wall].length;
        if (windowSpaces[wall].length > 0) {
            for (ws = 0; ws < windowCount; ws++) {
                wSpace = windowSpaces[wall][ws];
                w = defaultWindow;
                if (wSpace.left + w.width + 1 > doorSpace.left && wSpace.top + w.height + 1 > height - door
                    .height) {
                    return false;
                }
            }
        }
        return true;
    };

    var checkWindowPosition = function(wall, windowSpace, window) {
        var spacing = 0.5;
        var windowCount = windowSpaces[wall].length;
        var dCorners = [];
        var wCorners = [];
        var newCorners = [];

        c = new corner(windowSpace.left, height - windowSpace.top - window.height);
        newCorners.push(c);
        c = new corner(windowSpace.left + window.width, height - windowSpace.top - window.height);
        newCorners.push(c);
        c = new corner(windowSpace.left + window.width, height - windowSpace.top);
        newCorners.push(c);
        c = new corner(windowSpace.left, height - windowSpace.top);
        newCorners.push(c);

        if (doorSpaces[wall].length > 0) {
            for (ds = 0; ds < doorSpaces[wall].length; ds++) {
                dCorners = [];
                dSpace = doorSpaces[wall][ds];
                d = doors[wall][ds];
                c = new corner(dSpace.left - 1, 0);
                dCorners.push(c);
                c = new corner(dSpace.left + d.width + 1, 0);
                dCorners.push(c);
                c = new corner(dSpace.left + d.width + 1, d.height + 1);
                dCorners.push(c);
                c = new corner(dSpace.left - 1, d.height + 1);
                dCorners.push(c);

                for (i = 0; i < newCorners.length; i++) {
                    if (newCorners[i].x > dCorners[0].x && newCorners[i].z > dCorners[0].z &&
                        newCorners[i].x < dCorners[1].x && newCorners[i].z > dCorners[1].z &&
                        newCorners[i].x < dCorners[2].x && newCorners[i].z < dCorners[2].z &&
                        newCorners[i].x > dCorners[3].x && newCorners[i].z < dCorners[3].z) {
                        return false;
                    }
                }
            }
        }

        newCorners = [];
        c = new corner(windowSpace.left - spacing, height - windowSpace.top - window.height - spacing);
        newCorners.push(c);
        c = new corner(windowSpace.left + spacing + window.width, height - windowSpace.top - window.height -
            spacing);
        newCorners.push(c);
        c = new corner(windowSpace.left + spacing + window.width, height - windowSpace.top - spacing);
        newCorners.push(c);
        c = new corner(windowSpace.left - spacing, height - windowSpace.top - spacing);
        newCorners.push(c);

        if (windowCount > 0) {
            if (windowSpaces[wall].length > 0) {
                for (ws = 0; ws < windowCount; ws++) {
                    wCorners = [];
                    wSpace = windowSpaces[wall][ws];
                    w = defaultWindow;
                    c = new corner(wSpace.left - spacing, height - wSpace.top - w.height - spacing);
                    wCorners.push(c);
                    c = new corner(wSpace.left + w.width + spacing, height - wSpace.top - w.height -
                        spacing);
                    wCorners.push(c);
                    c = new corner(wSpace.left + w.width + spacing, height - wSpace.top - spacing);
                    wCorners.push(c);
                    c = new corner(wSpace.left - spacing, height - wSpace.top - spacing);
                    wCorners.push(c);

                    if (newCorners[0].x == wCorners[0].x && newCorners[0].z == wCorners[0].z &&
                        newCorners[1].x == wCorners[1].x && newCorners[1].z == wCorners[1].z &&
                        newCorners[2].x == wCorners[2].x && newCorners[2].z == wCorners[2].z &&
                        newCorners[3].x == wCorners[3].x && newCorners[3].z == wCorners[3].z) {
                        return false;
                    }

                    for (i = 0; i < newCorners.length; i++) {
                        if (windowSpace.top == wSpace.top) {
                            if (newCorners[i].x > wCorners[0].x && newCorners[i].z >= wCorners[0].z &&
                                newCorners[i].x < wCorners[1].x && newCorners[i].z >= wCorners[1].z &&
                                newCorners[i].x < wCorners[2].x && newCorners[i].z <= wCorners[2].z &&
                                newCorners[i].x > wCorners[3].x && newCorners[i].z <= wCorners[3].z) {
                                return false;
                            }
                        } else if (windowSpace.left == wSpace.left + w.width + spacing || wSpace.left ==
                            windowSpace
                            .left + w.width + spacing) {
                            if (newCorners[i].x >= wCorners[0].x && newCorners[i].z > wCorners[0].z &&
                                newCorners[i].x <= wCorners[1].x && newCorners[i].z > wCorners[1].z &&
                                newCorners[i].x <= wCorners[2].x && newCorners[i].z < wCorners[2].z &&
                                newCorners[i].x >= wCorners[3].x && newCorners[i].z < wCorners[3].z) {
                                return false;
                            }
                        } else {
                            if (newCorners[i].x >= wCorners[0].x && newCorners[i].z >= wCorners[0].z &&
                                newCorners[i].x <= wCorners[1].x && newCorners[i].z >= wCorners[1].z &&
                                newCorners[i].x <= wCorners[2].x && newCorners[i].z <= wCorners[2].z &&
                                newCorners[i].x >= wCorners[3].x && newCorners[i].z <= wCorners[3].z) {
                                return false;
                            }
                        }
                    }
                }
            }
        }
        return true;
    };

    var checkWindowMovement = function(wall, windowSpace, window) {
        var spacing = 0;
        var windowCount = windowSpaces[wall].length - 1;
        var dCorners = [];
        var wCorners = [];
        var newCorners = [];

        c = new corner(windowSpace.left - spacing, height - windowSpace.top - window.height - spacing);
        newCorners.push(c);
        c = new corner(windowSpace.left + spacing + window.width, height - windowSpace.top - window.height -
            spacing);
        newCorners.push(c);
        c = new corner(windowSpace.left + spacing + window.width, height - windowSpace.top - spacing);
        newCorners.push(c);
        c = new corner(windowSpace.left - spacing, height - windowSpace.top - spacing);
        newCorners.push(c);

        if (doorSpaces[wall].length > 0) {
            for (ds = 0; ds < doorSpaces[wall].length; ds++) {
                dSpace = doorSpaces[wall][ds];
                d = doors[wall][ds];
                c = new corner(dSpace.left - 1, 0);
                dCorners.push(c);
                c = new corner(dSpace.left + d.width + 1, 0);
                dCorners.push(c);
                c = new corner(dSpace.left + d.width + 1, d.height + 1);
                dCorners.push(c);
                c = new corner(dSpace.left - 1, d.height + 1);
                dCorners.push(c);

                for (i = 0; i < newCorners.length; i++) {
                    if (newCorners[i].x > dCorners[0].x && newCorners[i].z > dCorners[0].z &&
                        newCorners[i].x < dCorners[1].x && newCorners[i].z > dCorners[1].z &&
                        newCorners[i].x < dCorners[2].x && newCorners[i].z < dCorners[2].z &&
                        newCorners[i].x > dCorners[3].x && newCorners[i].z < dCorners[3].z) {
                        return false;
                    }
                }
            }
        }
        if (windowCount > 0) {
            if (windowSpaces[wall].length > 0) {
                for (ws = 0; ws < windowCount; ws++) {
                    wSpace = windowSpaces[wall][ws];
                    w = defaultWindow;
                    c = new corner(wSpace.left - spacing, height - wSpace.top - w.height - spacing);
                    wCorners.push(c);
                    c = new corner(wSpace.left + w.width + spacing, height - wSpace.top - w.height -
                        spacing);
                    wCorners.push(c);
                    c = new corner(wSpace.left + w.width + spacing, height - wSpace.top - spacing);
                    wCorners.push(c);
                    c = new corner(wSpace.left - spacing, height - wSpace.top - spacing);
                    wCorners.push(c);

                    for (i = 0; i < newCorners.length; i++) {
                        if (windowSpace.top == wSpace.top) {
                            if (newCorners[i].x > wCorners[0].x && newCorners[i].z >= wCorners[0].z &&
                                newCorners[i].x < wCorners[1].x && newCorners[i].z >= wCorners[1].z &&
                                newCorners[i].x < wCorners[2].x && newCorners[i].z <= wCorners[2].z &&
                                newCorners[i].x > wCorners[3].x && newCorners[i].z <= wCorners[3].z) {
                                return false;
                            }
                        } else if (windowSpace.left == wSpace.left + w.width + spacing || wSpace.left ==
                            windowSpace
                            .left + w.width + spacing) {
                            if (newCorners[i].x >= wCorners[0].x && newCorners[i].z > wCorners[0].z &&
                                newCorners[i].x <= wCorners[1].x && newCorners[i].z > wCorners[1].z &&
                                newCorners[i].x <= wCorners[2].x && newCorners[i].z < wCorners[2].z &&
                                newCorners[i].x >= wCorners[3].x && newCorners[i].z < wCorners[3].z) {
                                return false;
                            }
                        } else {
                            if (newCorners[i].x >= wCorners[0].x && newCorners[i].z >= wCorners[0].z &&
                                newCorners[i].x <= wCorners[1].x && newCorners[i].z >= wCorners[1].z &&
                                newCorners[i].x <= wCorners[2].x && newCorners[i].z <= wCorners[2].z &&
                                newCorners[i].x >= wCorners[3].x && newCorners[i].z <= wCorners[3].z) {
                                return false;
                            }
                        }
                    }
                }
            }
        }

        return true;
    };

    var removeDoor = function(wall) {
        if (doorSpaces[wall].length == 0) {
            alert("No doors to remove on that wall.");
            return;
        } else {
            doors[wall].pop();
            doorSpaces[wall].pop();
            if (doorSpaces[wall].length == 0) {
                switch (wall) {
                    case 0: {
                        document.querySelector('#remDoor0').style.visibility = 'hidden';
                        document.querySelector('#eDoorArrow0').style.visibility = 'hidden';
                        document.querySelector('#wDoorArrow0').style.visibility = 'hidden';
                        break;
                    }
                    case 1: {
                        document.querySelector('#remDoor1').style.visibility = 'hidden';
                        document.querySelector('#eDoorArrow1').style.visibility = 'hidden';
                        document.querySelector('#wDoorArrow1').style.visibility = 'hidden';
                        break;
                    }
                    case 2: {
                        document.querySelector('#remDoor2').style.visibility = 'hidden';
                        document.querySelector('#eDoorArrow2').style.visibility = 'hidden';
                        document.querySelector('#wDoorArrow2').style.visibility = 'hidden';
                        break;
                    }
                    case 3: {
                        document.querySelector('#remDoor3').style.visibility = 'hidden';
                        document.querySelector('#eDoorArrow3').style.visibility = 'hidden';
                        document.querySelector('#wDoorArrow3').style.visibility = 'hidden';
                        break;
                    }
                }
            }
        }
        rebuildWalls(house);
    };

    var doorLeft = function(wall) {
        if (doorSpaces[wall][doorSpaces[wall].length - 1].left == 1) {
            alert("Door cannot be moved further left.");
            return;
        }
        doorSpaces[wall][doorSpaces[wall].length - 1].left = doorSpaces[wall][doorSpaces[wall].length - 1]
            .left -
            0.5;
        d = doors[wall][doorSpaces[wall].length - 1];
        ds = doorSpaces[wall][doorSpaces[wall].length - 1];
        if (checkDoorPosition(wall, ds, d, true) == true) {
            rebuildWalls(house);
        } else {
            doorSpaces[wall][doorSpaces[wall].length - 1].left = doorSpaces[wall][doorSpaces[wall].length -
                    1
                ]
                .left + 0.5;
            alert("Door cannot be moved further left.");
            return;
        }
    };

    var doorRight = function(wall) {
        d = doors[wall][doorSpaces[wall].length - 1];
        ds = doorSpaces[wall][doorSpaces[wall].length - 1];
        if (wall % 2 == 0 && doorSpaces[wall][doorSpaces[wall].length - 1].left == width - d.width - 1) {
            alert("Door cannot be moved further right.");
            return;
        } else if (wall % 2 != 0 && doorSpaces[wall][doorSpaces[wall].length - 1].left == length - d.width -
            1) {
            alert("Door cannot be moved further right.");
            return;
        }
        doorSpaces[wall][doorSpaces[wall].length - 1].left = doorSpaces[wall][doorSpaces[wall].length - 1]
            .left +
            0.5;
        if (checkDoorPosition(wall, ds, d, true) == true) {
            rebuildWalls(house);
        } else {
            doorSpaces[wall][doorSpaces[wall].length - 1].left = doorSpaces[wall][doorSpaces[wall].length -
                    1
                ]
                .left - 0.5;
            alert("Door cannot be moved further right.");
            return;
        }
    };

    var widthLeft = function() {
        if (width == 5) {
            alert('Building width cannot be less than 5 feet.');
            return;
        }
        width = parseInt(document.querySelector('#BuildingWidth').value);
        width -= 1;
        $('#BuildingWidthLabel').text(width);
        document.querySelector('#BuildingWidth').value = width;
        buildFloor();
        computeBaseData();
        rebuildWalls(house);
        rebuildAllLeanTo();
        rebuildRoof();
    };

    var widthRight = function() {
        if (width == 60) {
            alert('Building width cannot exceed 60 feet.');
            return;
        }
        width = parseInt(document.querySelector('#BuildingWidth').value);
        width += 1;
        $('#BuildingWidthLabel').text(width);
        document.querySelector('#BuildingWidth').value = width;
        buildFloor();
        computeBaseData();
        rebuildWalls(house);
        rebuildAllLeanTo();
        rebuildRoof();
    };

    var lengthLeft = function() {
        if (length == 5) {
            alert('Building length cannot be less than 5 feet.');
            return;
        }
        length = parseInt(document.querySelector('#BuildingLength').value);
        length -= 1;
        $('#BuildingLengthLabel').text(length);
        document.querySelector('#BuildingLength').value = length;
        buildFloor();
        computeBaseData();
        rebuildWalls(house);
        rebuildAllLeanTo();
        rebuildRoof();
    };

    var lengthRight = function() {
        if (length == 200) {
            alert('Building length cannot exceed 200 feet.');
            return;
        }
        length = parseInt(document.querySelector('#BuildingLength').value);
        length += 1;
        $('#BuildingLengthLabel').text(length);
        document.querySelector('#BuildingLength').value = length;
        buildFloor();
        computeBaseData();
        rebuildWalls(house);
        rebuildAllLeanTo();
        rebuildRoof();
    };

    var heightLeft = function() {
        if (height == 5) {
            alert('Building height cannot be less than 5 feet.');
            return;
        }
        height = parseInt(document.querySelector('#BuildingHeight').value);
        height -= 1;
        $('#BuildingHeightLabel').text(height);
        document.querySelector('#BuildingHeight').value = height;
        buildFloor();
        computeBaseData();
        rebuildWalls(house);
        rebuildAllLeanTo();
        rebuildRoof();
    };

    var heightRight = function() {
        if (height == 20) {
            alert('Building height cannot exceed 20 feet.');
            return;
        }
        height = parseInt(document.querySelector('#BuildingHeight').value);
        height += 1;
        $('#BuildingHeightLabel').text(height);
        document.querySelector('#BuildingHeight').value = height;
        buildFloor();
        computeBaseData();
        rebuildWalls(house);
        rebuildAllLeanTo();
        rebuildRoof();
    };

    var pitchLeft = function() {
        if (roofPitch == 1) {
            alert('Roof pitch cannot be less than 1/12.');
            return;
        }
        roofPitch = parseInt(document.querySelector('#RoofPitch').value);
        roofPitch -= 1;
        $('#RoofPitchLabel').text(roofPitch);
        document.querySelector('#RoofPitch').value = roofPitch;
        rebuildWalls();
        rebuildRoof();
    };

    var pitchRight = function() {
        if (roofPitch == 5) {
            alert('Roof pitch cannot be more than 5/12.');
            return;
        }
        roofPitch = parseInt(document.querySelector('#RoofPitch').value);
        roofPitch += 1;
        $('#RoofPitchLabel').text(roofPitch + "/12");
        document.querySelector('#RoofPitch').value = roofPitch;
        rebuildWalls();
        rebuildRoof();
    };

    var overhangFBLeft = function() {
        if (overhangFB == 0) {
            alert('Overhang cannot be reduced below zero.');
            return;
        }
        oh = parseInt(document.querySelector('#SideOverhang').value);
        oh -= 1;
        overhangFB = oh * 0.5;
        $('#SideOverhangLabel').text(oh);
        document.querySelector('#SideOverhang').value = oh;
        overlapFB = ply + overhangFB;
        if (overhangFB > 0) {
            turnOffLeanTo(1);
            turnOffLeanTo(3);
        }
        rebuildRoof();
    };

    var overhangFBRight = function() {
        if (overhangFB == 2) {
            alert('Overhang cannot exceed 2 feet.');
            return;
        }
        oh = parseInt(document.querySelector('#SideOverhang').value);
        oh += 1;
        overhangFB = oh * 0.5;
        $('#SideOverhangLabel').text(oh);
        document.querySelector('#SideOverhang').value = oh;
        overlapFB = ply + overhangFB;
        if (overhangFB > 0) {
            turnOffLeanTo(1);
            turnOffLeanTo(3);
        }
        rebuildRoof();
    };

    var overhangLRFrontLeft = function() {
        if (overhangLRFront == 0) {
            alert('Overhang cannot be reduced below zero.');
            return;
        }
        overhangLRFront = parseInt(document.querySelector('#FrontOverhang').value);
        overhangLRFront -= 5;
        $('#FrontOverhangLabel').text(overhangLRFront);
        document.querySelector('#FrontOverhang').value = overhangLRFront;
        overlapLRFront = ply + overhangLRFront;
        roofApexDataLR = [0, 0 - overhangLRFront - ply, 0, 20 + overhangLRBack + ply];
        rebuildRoof();
        buildFloor();
    };

    var overhangLRFrontRight = function() {
        if (overhangLRFront == 50) {
            alert('Overhang cannot exceed 50 feet.');
            return;
        }
        turnOffLeanTo(0);
        overhangLRFront = parseInt(document.querySelector('#FrontOverhang').value);
        overhangLRFront += 5;
        $('#FrontOverhangLabel').text(overhangLRFront);
        document.querySelector('#FrontOverhang').value = overhangLRFront;
        overlapLRFront = ply + overhangLRFront;
        roofApexDataLR = [0, 0 - overhangLRFront - ply, 0, 20 + overhangLRBack + ply];
        rebuildRoof();
        buildFloor();
    };

    var overhangLRBackLeft = function() {
        if (overhangLRBack == 0) {
            alert('Overhang cannot be reduced below zero.');
            return;
        }
        overhangLRBack = parseInt(document.querySelector('#BackOverhang').value);
        overhangLRBack -= 5;
        $('#BackOverhangLabel').text(overhangLRBack);
        document.querySelector('#BackOverhang').value = overhangLRBack;
        overlapLRBack = ply + overhangLRBack;
        roofApexDataLR = [0, 0 - overhangLRFront - ply, 0, 20 + overhangLRBack + ply];
        rebuildRoof();
        buildFloor();
    };

    var overhangLRBackRight = function() {
        if (overhangLRBack == 50) {
            alert('Overhang cannot exceed 50 feet.');
            return;
        }
        turnOffLeanTo(2);
        overhangLRBack = parseInt(document.querySelector('#BackOverhang').value);
        overhangLRBack += 5;
        $('#BackOverhangLabel').text(overhangLRBack);
        document.querySelector('#BackOverhang').value = overhangLRBack;
        overlapLRBack = ply + overhangLRBack;
        roofApexDataLR = [0, 0 - overhangLRFront - ply, 0, 20 + overhangLRBack + ply];
        rebuildRoof();
        buildFloor();
    };

    var getWallLeft = function(wall) {
        var wall2 = 0;
        if (wall == 0) {
            wall2 = 3;
        } else {
            wall2 = wall - 1;
        }
        return wall2;
    };

    var getWallRight = function(wall) {
        var wall3 = 0;
        if (wall == 3) {
            wall3 = 0;
        } else {
            wall3 = wall + 1;
        }
        return wall3
    };

    var turnOffLeanTo = function(wall) {
        s = 'leanToSwitch' + wall;
        document.querySelector('#' + s).checked = false;
        s = '.leanto-' + wall;
        $(s).each(function(i, obj) {
            obj.style.visibility = "hidden";
        });
        s = 'leanToWrapLeft' + wall;
        document.querySelector('#' + s).checked = false;
        s = 'leanToWrapRight' + wall;
        document.querySelector('#' + s).checked = false;
        s = 'leanToWrapRight' + getWallLeft(wall);
        document.querySelector('#' + s).checked = false;
        s = 'leanToWrapLeft' + getWallRight(wall);
        document.querySelector('#' + s).checked = false;
        leanTo[wall].width = 0;
        leanTo[wall].wrapLeft = 0;
        leanTo[getWallRight(wall)].wrapLeft = 0;
        leanTo[wall].wrapRight = 0;
        leanTo[getWallLeft(wall)].wrapRight = 0;
        disposeLeanTo(wall);
        disposeLeanTo(getWallLeft(wall));
        disposeLeanTo(getWallRight(wall));
        checkLeanToWraps();
        buildLeanTo(getWallLeft(wall));
        buildLeanTo(getWallRight(wall));
    };

    var leanToSwitch = function(wall) {
        s = 'leanToSwitch' + wall;
        ck = document.querySelector('#' + s);
        if (ck.checked) {
            if (wall == 0) {
                if (overhangLRFront > 0) {
                    overhangLRFront = 0;
                    overlapLRFront = ply + overhangLRFront;
                    document.querySelector('#FrontOverhang').value = 0;
                    document.querySelector('#FrontOverhangLabel').innerHTML = 0;
                    rebuildRoof();
                }
            } else if (wall == 2) {
                if (overhangLRBack > 0) {
                    overhangLRBack = 0;
                    overlapLRBack = ply + overhangLRBack;
                    document.querySelector('#BackOverhang').value = 0;
                    document.querySelector('#BackOverhangLabel').innerHTML = 0;
                    rebuildRoof();
                }
            } else if (wall == 1 || wall == 3) {
                if (overhangFB > 0) {
                    overhangFB = 0;
                    overlapFB = ply + overhangFB;
                    document.querySelector('#SideOverhang').value = 0;
                    document.querySelector('#SideOverhangLabel').innerHTML = 0;
                    rebuildRoof();
                }
            }

            s = '.leanto-' + wall;
            $(s).each(function(i, obj) {
                obj.style.visibility = "visible";
            });
            leanTo[wall].width = 5;
            s = 'leanToWidth' + wall;
            document.querySelector('#' + s).value = leanTo[wall].width;
            leanTo[wall].pitch = leanToPitch;
            s = 'leanToPitch' + wall;
            document.querySelector('#' + s).value = leanTo[wall].pitch;
            buildLeanTo(wall);
            checkLeanToWraps();
        } else {
            s = '.leanto-' + wall;
            $(s).each(function(i, obj) {
                obj.style.visibility = "hidden";
            });
            s = 'leanToWrapLeft' + wall;
            document.querySelector('#' + s).checked = false;
            s = 'leanToWrapRight' + wall;
            document.querySelector('#' + s).checked = false;
            s = 'leanToWrapRight' + getWallLeft(wall);
            document.querySelector('#' + s).checked = false;
            s = 'leanToWrapLeft' + getWallRight(wall);
            document.querySelector('#' + s).checked = false;
            leanTo[wall].width = 0;
            leanTo[wall].wrapLeft = 0;
            leanTo[getWallRight(wall)].wrapLeft = 0;
            leanTo[wall].wrapRight = 0;
            leanTo[getWallLeft(wall)].wrapRight = 0;
            disposeLeanTo(wall);
            disposeLeanTo(getWallLeft(wall));
            disposeLeanTo(getWallRight(wall));
            checkLeanToWraps();
            buildLeanTo(getWallLeft(wall));
            buildLeanTo(getWallRight(wall));
        }
        buildFloor();
        //console.log(leanTo);
    };
    var leanToWrapLeft = function(wall) {
        s = 'leanToWrapLeft' + wall;
        ck = document.querySelector('#' + s);
        if (ck.checked) {
            leanTo[wall].wrapLeft = 1;
            leanTo[getWallLeft(wall)].wrapRight = 1;
            s = 'leanToWrapRight' + getWallLeft(wall);
            document.querySelector('#' + s).checked = true;
        } else {
            leanTo[wall].wrapLeft = 0;
            leanTo[getWallLeft(wall)].wrapRight = 0;
            s = 'leanToWrapRight' + getWallLeft(wall);
            document.querySelector('#' + s).checked = false;
        }
        disposeLeanTo(wall);
        disposeLeanTo(getWallLeft(wall));
        buildLeanTo(wall);
        buildLeanTo(getWallLeft(wall));
    };
    var leanToWrapRight = function(wall) {
        s = 'leanToWrapRight' + wall;
        ck = document.querySelector('#' + s);
        if (ck.checked) {
            leanTo[wall].wrapRight = 1;
            leanTo[getWallRight(wall)].wrapLeft = 1;
            s = 'leanToWrapLeft' + getWallRight(wall);
            document.querySelector('#' + s).checked = true;
        } else {
            leanTo[wall].wrapRight = 0;
            leanTo[getWallRight(wall)].wrapLeft = 0;
            s = 'leanToWrapLeft' + getWallRight(wall);;
            document.querySelector('#' + s).checked = false;
        }
        disposeLeanTo(wall);
        disposeLeanTo(getWallRight(wall));
        buildLeanTo(wall);
        buildLeanTo(getWallRight(wall));
    };
    var checkLeanToWraps = function() {
        for (var i = 0; i < 4; i++) {
            checkLeanToWrapLeft(i);
            checkLeanToWrapRight(i);
        }
        for (var i = 0; i < 4; i++) {
            disposeLeanTo(i);
            buildLeanTo(i);
        }
    }
    var checkLeanToWrapLeft = function(wall) {
        if (leanTo[wall].drop == leanTo[getWallLeft(wall)].drop && leanTo[wall].cut1 == 0 && leanTo[
                getWallLeft(
                    wall)].cut2 == 0 && leanTo[wall].pitch == leanTo[getWallLeft(wall)].pitch && leanTo[
                wall].width ==
            leanTo[getWallLeft(wall)].width) {
            s = 'leanToWrapLeft' + wall;
            document.querySelector('#' + s).disabled = false;
        } else {
            s = 'leanToWrapLeft' + wall;
            leanTo[wall].leftWrap = 0;
            document.querySelector('#' + s).checked = false;
            document.querySelector('#' + s).disabled = true;
            s = 'leanToWrapRight' + getWallLeft(wall);
            leanTo[getWallLeft(wall)].wrapRight = 0;
            document.querySelector('#' + s).checked = false;
            document.querySelector('#' + s).disabled = true;
        }
    };
    var checkLeanToWrapRight = function(wall) {
        if (leanTo[wall].drop == leanTo[getWallRight(wall)].drop && leanTo[wall].cut1 == 0 && leanTo[
                getWallRight(
                    wall)].cut2 == 0 && leanTo[wall].pitch == leanTo[getWallRight(wall)].pitch && leanTo[
                wall].width ==
            leanTo[getWallRight(wall)].width) {
            s = 'leanToWrapRight' + wall;
            document.querySelector('#' + s).disabled = false;
        } else {
            s = 'leanToWrapRight' + wall;
            leanTo[wall].wrapRight = 0;
            document.querySelector('#' + s).checked = false;
            document.querySelector('#' + s).disabled = true;
            s = 'leanToWrapLeft' + getWallRight(wall);
            leanTo[getWallRight(wall)].wrapLeft = 0;
            document.querySelector('#' + s).checked = false;
            document.querySelector('#' + s).disabled = true;
        }
    };
    var leanToWidthLeft = function(wall) {
        if (leanTo[wall].width == 5) {
            alert('Lean to width cannot be reduced 5 feet.');
            return;
        }
        leanTo[wall].width -= 5;
        s = 'leanToWidth' + wall;
        document.querySelector('#' + s).value = leanTo[wall].width;
        buildLeanTo(wall);
        checkLeanToWraps();
    };
    var leanToWidthRight = function(wall) {
        if (leanTo[wall].width == 25) {
            alert('Lean to width cannot exceed 25 feet.');
            return;
        }
        leanTo[wall].width += 5;
        s = 'leanToWidth' + wall;
        document.querySelector('#' + s).value = leanTo[wall].width;
        buildLeanTo(wall);
        checkLeanToWraps();
    };
    var leanToPitchLeft = function(wall) {
        if (leanTo[wall].pitch == 1) {
            alert('Pitch cannot be reduced below 1/12.');
            return;
        }
        leanTo[wall].pitch -= 1;
        s = 'leanToPitch' + wall;
        document.querySelector('#' + s).value = leanTo[wall].pitch;
        buildLeanTo(wall);
        checkLeanToWraps();
    };
    var leanToPitchRight = function(wall) {
        if (leanTo[wall].pitch == 5) {
            alert('Pitch cannot be increased above 5/12.');
            return;
        }
        leanTo[wall].pitch += 1;
        s = 'leanToPitch' + wall;
        document.querySelector('#' + s).value = leanTo[wall].pitch;
        buildLeanTo(wall);
        checkLeanToWraps();
    };
    var leanToDropLeft = function(wall) {
        if (leanTo[wall].drop == 0) {
            alert('Drop cannot be reduced below zero.');
            return;
        }
        leanTo[wall].drop -= 1;
        s = 'leanToDrop' + wall;
        document.querySelector('#' + s).value = leanTo[wall].drop;
        buildLeanTo(wall);
        checkLeanToWraps();
    };
    var leanToDropRight = function(wall) {
        if (leanTo[wall].drop == height - 6) {
            alert('Drop cannot be reduced any further.');
            return;
        }
        leanTo[wall].drop += 1;
        s = 'leanToDrop' + wall;
        document.querySelector('#' + s).value = leanTo[wall].drop;
        buildLeanTo(wall);
        checkLeanToWraps();
    };
    var leanToCut1Left = function(wall) {
        if (wall == 0 || wall == 2) {
            if (leanTo[wall].cut1 == 0) {
                alert('Cut1 cannot be reduced below zero.');
                return;
            }
        }
        leanTo[wall].cut1 -= 1;
        s = 'leanToCut1' + wall;
        document.querySelector('#' + s).value = leanTo[wall].cut1;
        buildLeanTo(wall);
        checkLeanToWraps();
    };
    var leanToCut1Right = function(wall) {
        leanTo[wall].cut1 += 1;
        s = 'leanToCut1' + wall;
        document.querySelector('#' + s).value = leanTo[wall].cut1;
        buildLeanTo(wall);
        checkLeanToWraps();
    };
    var leanToCut2Left = function(wall) {
        if (wall == 0 || wall == 2) {
            if (leanTo[wall].cut2 == 0) {
                alert('Cut2 cannot be reduced below zero.');
                return;
            }
        }
        leanTo[wall].cut2 -= 1;
        s = 'leanToCut2' + wall;
        document.querySelector('#' + s).value = leanTo[wall].cut2;
        buildLeanTo(wall);
        checkLeanToWraps();
    };
    var leanToCut2Right = function(wall) {
        leanTo[wall].cut2 += 1;
        s = 'leanToCut2' + wall;
        document.querySelector('#' + s).value = leanTo[wall].cut2;
        buildLeanTo(wall);
        checkLeanToWraps();
    };
    var captureScreen = function() {
        BABYLON.Tools.CreateScreenshotUsingRenderTarget(engine, scene.activeCamera, {
            width: 800,
            height: 400,
            precision: 4
        });
    };
    var hexToRGB = function(h) {
        let r = 0,
            g = 0,
            b = 0;
        if (h.length == 4) {
            r = "0x" + h[1] + h[1];
            g = "0x" + h[2] + h[2];
            b = "0x" + h[3] + h[3];

        } else if (h.length == 7) {
            r = "0x" + h[1] + h[2];
            g = "0x" + h[3] + h[4];
            b = "0x" + h[5] + h[6];
        }

        r = +(r / 255).toFixed(1);
        g = +(g / 255).toFixed(1);
        b = +(b / 255).toFixed(1);

        return [r, g, b];
    };
    var rgbToBabylon = function(rgb) {
        let r = 0,
            g = 0,
            b = 0;
        arrOfStr = rgb.split(",");
        r = (parseInt(arrOfStr[0]) / 255).toFixed(3);
        g = (parseInt(arrOfStr[1]) / 255).toFixed(3);
        b = (parseInt(arrOfStr[2]) / 255).toFixed(3);

        return [r, g, b];
    };

    var showFL = function() {
        fl = $.featherlight($('#mylightbox'), {
            persist: true
        });
        fl.open();
    };

    var createScene = function() {
        leanTo[0] = new leanTo(0, roofPitch, 0, 0, 0);
        leanTo[1] = new leanTo(0, roofPitch, 0, 0, 0);
        leanTo[2] = new leanTo(0, roofPitch, 0, 0, 0);
        leanTo[3] = new leanTo(0, roofPitch, 0, 0, 0);

        scene = new BABYLON.Scene(engine);
        scene.gravity = new BABYLON.Vector3(0, -0.15, 0);
        scene.collisionsEnabled = true;

        zoomCamera = new BABYLON.ArcRotateCamera("zoomCamera", -Math.PI / 2, Math.PI / 3, 25, new BABYLON
            .Vector3(0,
                5, -8), scene);
        zoomCamera.setTarget(new BABYLON.Vector3(0, 4.5, 10));
        zoomCamera.zoomToMouseLocation = true;
        zoomCamera.applyGravity = true;
        zoomCamera.ellipsoid = new BABYLON.Vector3(1, 1, 1);
        zoomCamera.checkCollisions = true;
        zoomCamera.attachControl(canvas, true);

        uniCamera = new BABYLON.UniversalCamera("uniCamera", new BABYLON.Vector3(0, 5, -8), scene, true);
        uniCamera.setTarget(new BABYLON.Vector3(0, 4.5, 10));
        uniCamera.applyGravity = true;
        uniCamera.ellipsoid = new BABYLON.Vector3(1, 4, 1);
        uniCamera.checkCollisions = true;
        uniCamera.attachControl(canvas, false);

        arcCamera = new BABYLON.ArcRotateCamera("arcCamera", -Math.PI / 2, Math.PI / 3, 25, new BABYLON
            .Vector3(0,
                5, -8), scene);
        arcCamera.setTarget(new BABYLON.Vector3(0, 4.5, 10));
        arcCamera.applyGravity = true;
        arcCamera.ellipsoid = new BABYLON.Vector3(1, 1, 1);
        arcCamera.checkCollisions = true;
        arcCamera.attachControl(canvas, true);

        scene.activeCamera = arcCamera;
        //scene.activeCamera = zoomCamera;
        //scene.activeCamera = uniCamera;

        // 			var light0 = new BABYLON.HemisphericLight("hemiLight", new BABYLON.Vector3(0, 1, 0), scene);
        // 			light0.intensity = .7;
        // 			light0.groundColor = new BABYLON.Color3(0, 0, 0);
        // 			light0.specular = BABYLON.Color3.Black();

        //var light1 = new BABYLON.DirectionalLight("dir01", new BABYLON.Vector3(-1, -2, -1), scene);
        //light1.position = new BABYLON.Vector3(20, 40, 5);
        //light1.intensity = .5;

        //var light2 = new BABYLON.DirectionalLight("dir02", new BABYLON.Vector3(1, -2, 1), scene);
        //light2.position = new BABYLON.Vector3(-20, -40, 5);
        //light2.intensity = .5;

        //var hemi1 = new BABYLON.HemisphericLight("HemiLight", new BABYLON.Vector3(0, 1, 0), scene);
        //hemi1.intensity = 0.9;
        //hemi1.groundColor = new BABYLON.Color3(1,1,1);
        //hemi1.specular = BABYLON.Color3.Black();


        var hemi = new BABYLON.HemisphericLight("HemiLight", new BABYLON.Vector3(0, 1, 0), scene);
        hemi.intensity = 0.75;
        hemi.groundColor = new BABYLON.Color3(0.13, 0.13, 0.13);
        //hemi.groundColor = new BABYLON.Color3.White();
        hemi.specular = BABYLON.Color3.Black();
        //hemi.specular = BABYLON.Color3.White();
        hemi.shadowEnablee = false;

        var direc1 = new BABYLON.DirectionalLight('directional', new BABYLON.Vector3(1, 0.1, 1), scene);
        direc1.intensity = 0.8;
        direc1.specular = BABYLON.Color3.Black();
        direc1.shadowEnablee = false;

        var direc2 = new BABYLON.DirectionalLight('directional', new BABYLON.Vector3(-1, 0.1, -1), scene);
        direc2.intensity = 0.8;
        direc2.specular = BABYLON.Color3.Black();
        direc2.shadowEnablee = false;

        //             var direc3 = new BABYLON.DirectionalLight('directional', new BABYLON.Vector3(1, 0, 0), scene);
        //             direc3.intensity = 0.6;
        //             direc3.specular = BABYLON.Color3.Black();

        //             var direc4 = new BABYLON.DirectionalLight('directional', new BABYLON.Vector3(-1, 0, 0), scene);
        //             direc4.intensity = 0.6;
        //             direc4.specular = BABYLON.Color3.Black();

        //             var direc5 = new BABYLON.DirectionalLight('directional', new BABYLON.Vector3(0, 1, 0), scene);
        //             direc5.intensity = 0.1;
        //             direc5.specular = BABYLON.Color3.Black();

        var direc6 = new BABYLON.DirectionalLight('directional', new BABYLON.Vector3(0, -1, 0), scene);
        direc6.intensity = 0.125;
        direc6.specular = BABYLON.Color3.Black();

        // Skybox
        var skybox = BABYLON.MeshBuilder.CreateBox("skyBox", {
            size: 1000.0
        }, scene);
        var skyboxMaterial = new BABYLON.StandardMaterial("skyBox", scene);
        skyboxMaterial.backFaceCulling = false;
        skyboxMaterial.reflectionTexture = new BABYLON.CubeTexture("skytextures/TropicalSunnyDay", scene);
        skyboxMaterial.reflectionTexture.coordinatesMode = BABYLON.Texture.SKYBOX_MODE;
        skyboxMaterial.diffuseColor = new BABYLON.Color3(0, 0, 0);
        skyboxMaterial.specularColor = new BABYLON.Color3(0, 0, 0);
        skybox.material = skyboxMaterial;
        skybox.checkCollisions = true;

        ground = BABYLON.MeshBuilder.CreateGround("ground", {
            width: 1000,
            height: 1000
        });
        ground.position.y = -0.01;
        grassMaterial = new BABYLON.StandardMaterial(name + "bawl", scene);
        //grassMaterial.diffuseTexture = new BABYLON.Texture("green1.jpg", scene);
        //grassTexture = new BABYLON.GrassProceduralTexture(name + "textbawl", 1024, scene);
        grassTexture = new BABYLON.GrassProceduralTexture(name + "textbawl", 2048, scene);
        grassMaterial.ambientTexture = grassTexture;
        ground.material = grassMaterial;
        ground.checkCollisions = true;


        BABYLON.OBJFileLoader.OPTIMIZE_WITH_UV = true;

        loadWindowModel();
        load3x7DoorModel();
        load4x7DoorModel();
        load6x7DoorModel();
        loadRollupDoor();
        loadSectionalDoor();
        loadWallTrim();
        loadRidgeCap();
        loadRakeTrim();


        buildFloor();
        rebuildWalls(house);
        rebuildRoof();

        //scene.debugLayer.show();

        //console.log(scene.meshes);

        //Polygon shape in XoZ plane
        //         	const shape = [ 
        //         		new BABYLON.Vector3(-10, 0, 0), 
        //                 new BABYLON.Vector3(-10, 0, 10), 
        //                 new BABYLON.Vector3(0, 0, 15), 
        //                 new BABYLON.Vector3(10, 0, 10), 
        //                 new BABYLON.Vector3(10, 0, 0)
        //             ];

        //         	//Holes in XoZ plane
        //         	const holes = [];
        //         		//holes[0] = [ 
        //                     //new BABYLON.Vector3(1, 0, -1),
        //                     //new BABYLON.Vector3(1.5, 0, 0),
        //                     //new BABYLON.Vector3(1.4, 0, 1),
        //                     //new BABYLON.Vector3(0.5, 0, 1.5)
        //                 //];

        //         		//holes[1] = [ 
        //                     //new BABYLON.Vector3(0, 0, -2),
        //                     //new BABYLON.Vector3(0.5, 0, -1),
        //                     //new BABYLON.Vector3(0.4, 0, 0),
        //                     //new BABYLON.Vector3(-1.5, 0, 0.5)
        //                 //];

        //             const polygon = BABYLON.MeshBuilder.CreatePolygon("polygon", {shape:shape, holes:holes, sideOrientation: BABYLON.Mesh.DOUBLESIDE });

        //             polygon.rotation.x = 4.71239;
        //             polygon.material = new BABYLON.StandardMaterial("", scene);
        //         	polygon.material.bumpTexture = new BABYLON.Texture("wall_panel_normal.png", scene);
        //         	polygon.material.invertNormalMapX = true;

        return scene;

    }

    initFunction = async function() {
        var asyncEngineCreation = async function() {
            try {
                return createDefaultEngine();
            } catch (e) {
                console.log(
                    "The available createEngine function failed. Creating the default engine instead"
                );
                return createDefaultEngine();
            }
        }

        engine = await asyncEngineCreation();
        if (!engine) throw 'Engine should not be null.';
        scene = createScene();
    };
    initFunction().then(() => {
        sceneToRender = scene
        engine.runRenderLoop(function() {
            if (sceneToRender && sceneToRender.activeCamera) {
                sceneToRender.render();
            }
        });
    });

    // Resize
    window.addEventListener("resize", function() {
        engine.resize();
    });

    $(document).ready(function() {

        buildFloor();
        rebuildWalls(house);
        rebuildRoof();

        $('#WallColor').change(function() {
            wallColor = rgbToBabylon($('#WallColor').val());
            //console.log(wallColor);
            wallColorText = $('#WallColor option:selected').text();
            rebuildWalls();
            rebuildRoof();
        });

        $('#RoofColor').change(function() {
            roofColor = rgbToBabylon($('#RoofColor').val());
            roofColorText = $('#RoofColor option:selected').text();
            rebuildRoof();
            checkLeanToWraps();
        });

        $('#TrimColor').change(function() {
            trimColor = rgbToBabylon($('#TrimColor').val());
            trimColorText = $('#TrimColor option:selected').text();
            rebuildWalls();
            rebuildRoof();
            checkLeanToWraps();

            var meshCount = scene.meshes.length - 1;
            for (var i = meshCount; i >= 0; i--) {
                if (scene.meshes[i].name.includes("frame_010_Plane.015")) {
                    scene.meshes[i].material.diffuseColor = new BABYLON.Color3(trimColor[0],
                        trimColor[
                            1], trimColor[2]);
                }
                if (scene.meshes[i].name.includes("frame_4x7_Plane.015")) {
                    scene.meshes[i].material.diffuseColor = new BABYLON.Color3(trimColor[0],
                        trimColor[
                            1], trimColor[2]);
                }
                if (scene.meshes[i].name.includes("frame_014_Plane.018")) {
                    scene.meshes[i].material.diffuseColor = new BABYLON.Color3(trimColor[0],
                        trimColor[
                            1], trimColor[2]);
                }
            }
        });

        $('#RoofPitch').change(function(event) {
            $('#RoofPitchLabel').text(document.querySelector('#RoofPitch').value + "/12");
            roofPitch = parseInt(document.querySelector('#RoofPitch').value);
            if (document.querySelector('#RoofPitch').value == 1) {
                roofHeight = 0.5;
            } else if (document.querySelector('#RoofPitch').value == 2) {
                roofHeight = 1;
            } else if (document.querySelector('#RoofPitch').value == 3) {
                roofHeight = 1.5;
            } else if (document.querySelector('#RoofPitch').value == 4) {
                roofHeight = 2;
            } else if (document.querySelector('#RoofPitch').value == 5) {
                roofHeight = 2.5;
            }

            rebuildWalls(house);
            rebuildRoof();
        });

        $('#SideOverhang').change(function(event) {
            $('#SideOverhangLabel').text(document.querySelector('#SideOverhang').value);
            overhangFB = parseInt(document.querySelector('#SideOverhang').value) * 0.5;
            overlapFB = ply + overhangFB;
            if (overhangFB > 0) {
                turnOffLeanTo(1);
                turnOffLeanTo(3);
            }
            rebuildRoof();
        });

        $('#FrontOverhang').change(function(event) {
            $('#FrontOverhangLabel').text(document.querySelector('#FrontOverhang').value);
            overhangLRFront = parseInt(document.querySelector('#FrontOverhang').value);
            overlapLRFront = ply + overhangLRFront;
            roofApexDataLR = [0, 0 - overhangLRFront - ply, 0, 20 + overhangLRBack + ply];
            if (overhangLRFront > 0) {
                turnOffLeanTo(0);
            }
            rebuildRoof();
            buildFloor();
        });

        $('#BackOverhang').change(function(event) {
            $('#BackOverhangLabel').text(document.querySelector('#BackOverhang').value);
            overhangLRBack = parseInt(document.querySelector('#BackOverhang').value);
            overlapLRBack = ply + overhangLRBack;
            roofApexDataLR = [0, 0 - overhangLRFront - ply, 0, 20 + overhangLRBack + ply];
            if (overhangLRBack > 0) {
                turnOffLeanTo(0);
            }
            rebuildRoof();
            buildFloor();
        });

        $('#BuildingWidth').change(function(event) {
            $('#BuildingWidthLabel').text(document.querySelector('#BuildingWidth').value);
            width = parseInt(document.querySelector('#BuildingWidth').value);
            buildFloor();
            computeBaseData();
            rebuildWalls(house);
            rebuildRoof();
            checkLeanToWraps();
            scene.activeCamera.setTarget(house.getBoundingInfo().boundingSphere.centerWorld);
        });

        $('#BuildingLength').change(function(event) {
            $('#BuildingLengthLabel').text(document.querySelector('#BuildingLength').value);
            length = parseInt(document.querySelector('#BuildingLength').value);
            buildFloor();
            computeBaseData();
            rebuildWalls(house);
            rebuildRoof();
            checkLeanToWraps();
            scene.activeCamera.setTarget(house.getBoundingInfo().boundingSphere.centerWorld);
        });

        $('#BuildingHeight').change(function(event) {
            $('#BuildingHeightLabel').text(document.querySelector('#BuildingHeight').value);
            height = parseInt(document.querySelector('#BuildingHeight').value) //*0.85;
            computeBaseData();
            rebuildWalls(house);
            rebuildRoof();
            checkLeanToWraps();
            scene.activeCamera.setTarget(house.getBoundingInfo().boundingSphere.centerWorld);
        });

        $('.SelectedCamera').change(function() {
            switch (this.value) {
                case 'arcCamera': {
                    scene.activeCamera = arcCamera;
                    break;
                }
                case 'zoomCamera': {
                    scene.activeCamera = zoomCamera;
                    break;
                }
                case 'uniCamera': {
                    scene.activeCamera = uniCamera;
                    break;
                }
            }
        });

        $("#email_quote").submit(function(e) {
            //alert("Request quote");
            e.preventDefault();
            emailText = buildQuoteEmail();
            $('#email').val(emailText);
            var formData = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "emailFunction.php",
                data: formData,
                success: function(html) {
                    fl.close();
                    alert("Your quote request has been sent.");
                }

            });
        });



        var buildQuoteEmail = function() {

            var emailText = "";
            emailText = emailText + "<h4>Building Size</h4>";
            emailText = emailText + "<p>Length = " + length + " ft</p>";
            emailText = emailText + "<p>Width = " + width + " ft</p>";
            emailText = emailText + "<p>Height = " + height + " ft</p>";

            emailText = emailText + "<h4>Color Selections</h4>";
            emailText = emailText + "<p>Wall Color = " + wallColorText + "</p>";
            emailText = emailText + "<p>Roof Color = " + roofColorText + "</p>";
            emailText = emailText + "<p>Trim Color = " + trimColorText + "</p>";

            emailText = emailText + "<h4>Roof</h4>";
            emailText = emailText + "<p>Roof Pitch = " + roofPitch + "/12</p>";
            if (overhangFB > 0) {
                emailText = emailText + "<p>Side Overhangs = " + overhangFB + " ft</p>";
            }
            if (overhangLRFront > 0) {
                emailText = emailText + "<p>Front Gable Extension = " + overhangLRFront + " ft</p>";
            }
            if (overhangLRBack > 0) {
                emailText = emailText + "<p>Rear Gable Extension = " + overhangLRBack + " ft</p>";
            }

            for (ii = 0; ii < 4; ii++) {
                if (leanTo[ii].width > 0) {
                    switch (ii) {
                        case 0:
                            emailText = emailText + "<h4>Front Lean To</h4>";
                            break;
                        case 1:
                            emailText = emailText + "<h4>Right Lean To</h4>";
                            break;
                        case 2:
                            emailText = emailText + "<h4>Back Lean To</h4>";
                            break;
                        case 3:
                            emailText = emailText + "<h4>Left Lean To</h4>";
                            break;
                    }
                    emailText = emailText + "<p>Width = " + leanTo[ii].width + " ft</p>";
                    emailText = emailText + "<p>Pitch = " + leanTo[ii].pitch + "/12</p>";
                    emailText = emailText + "<p>Drop = " + leanTo[ii].drop + " ft</p>";
                    emailText = emailText + "<p>Cut1 = " + leanTo[ii].cut1 + " ft</p>";
                    emailText = emailText + "<p>Cut2 = " + leanTo[ii].cut2 + " ft</p>";
                    if (leanTo[ii].wrapLeft == 0) {
                        emailText = emailText + "<p>Wrap Left = No</p>";
                    } else {
                        vaemailText = emailText + "<p>Wrap Left = Yes</p>";
                    }
                    if (leanTo[ii].wrapRight == 0) {
                        emailText = emailText + "<p>Wrap Right = No</p>";
                    } else {
                        emailText = emailText + "<p>Wrap Right = Yes</p>";
                    }
                }
            }


            var numWindows = 0;

            for (w = 0; w < 4; w++) {
                numWindows = walls[w].windowSpaces.length;

                switch (w) {
                    case 0:
                        if (numWindows > 0) {
                            emailText = emailText + "<h4>Front Windows</h4>";
                        }
                        break;
                    case 1:
                        if (numWindows > 0) {
                            emailText = emailText + "<h4>Right Windows</h4>";
                        }
                        break;
                    case 2:
                        if (numWindows > 0) {
                            emailText = emailText + "<h4>Back Windows</h4>";
                        }
                        break;
                    case 3:
                        if (numWindows > 0) {
                            emailText = emailText + "<h4>Left Windows</h4>";
                        }
                        break;
                }

                for (var ws = 0; ws < numWindows; ws++) {
                    emailText = emailText + "<p>" + walls[w].windowSpaces[ws].left +
                        " ft from left " +
                        walls[w].windowSpaces[ws].top + " ft from top</p>";
                }
            }

            var numDoors = 0;

            for (w = 0; w < 4; w++) {
                numDoors = walls[w].doorSpaces.length;

                switch (w) {
                    case 0:
                        if (numDoors > 0) {
                            emailText = emailText + "<h4>Front Doors</h4>";
                        }
                        break;
                    case 1:
                        if (numDoors > 0) {
                            emailText = emailText + "<h4>Right Doors</h4>";
                        }
                        break;
                    case 2:
                        if (numDoors > 0) {
                            emailText = emailText + "<h4>Back Doors</h4>";
                        }
                        break;
                    case 3:
                        if (numDoors > 0) {
                            emailText = emailText + "<h4>Left Doors</h4>";
                        }
                        break;
                }

                for (var d = 0; d < numDoors; d++) {
                    emailText = emailText + "<p>" + walls[w].doorSpaces[d].door.type + " - " +
                        walls[w]
                        .doorSpaces[d].left + " ft from left</p>";
                }
            }

            return emailText;
            //$('#email').val(emailText);

        };

    });
    </script>

</body>

</html>