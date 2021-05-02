<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
        <style>
        #map {
            width: 905px;
            height: 892px;
        }
        </style>
        <title></title>
    </head>
    <body>
      <h1>LEÓN 2021</h1>
        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="data/13_1.js"></script>
        <script src="data/_2.js"></script>
        <script src="data/DistritosFederales_3.js"></script>
        <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;

            if (e.target.feature.geometry.type === 'LineString') {
              highlightLayer.setStyle({
                color: '#ffff00',
              });
            } else {
              highlightLayer.setStyle({
                fillColor: '#ffff00',
                fillOpacity: 1
              });
            }
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[21.065971211565532,-101.74635413068988],[21.20117751626742,-101.60014799681214]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_GoogleMaps_0');
        map.getPane('pane_GoogleMaps_0').style.zIndex = 400;
        var layer_GoogleMaps_0 = L.tileLayer('http://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleMaps_0',
            opacity: 0.472,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 22
        });
        layer_GoogleMaps_0;
        map.addLayer(layer_GoogleMaps_0);
        function pop_13_1(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">distrito_f</th>\
                        <td>' + (feature.properties['distrito_f'] !== null ? autolinker.link(feature.properties['distrito_f'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">seccion</th>\
                        <td>' + (feature.properties['seccion'] !== null ? autolinker.link(feature.properties['seccion'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">secc_visit</th>\
                        <td>' + (feature.properties['secc_visit'] !== null ? autolinker.link(feature.properties['secc_visit'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_13_1_0(feature) {
            switch(String(feature.properties['secc_visit'])) {
                case '1':
                    return {
                pane: 'pane_13_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.06884705882352941)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(200,90,90,0.231)',
                interactive: false,
            }
                    break;
                default:
                    return {
                pane: 'pane_13_1',
                opacity: 1,
                color: 'rgba(35,35,35,0.06884705882352941)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,215,215,0.231)',
                interactive: false,
            }
                    break;
            }
        }
        map.createPane('pane_13_1');
        map.getPane('pane_13_1').style.zIndex = 401;
        map.getPane('pane_13_1').style['mix-blend-mode'] = 'normal';
        var layer_13_1 = new L.geoJson(json_13_1, {
            attribution: '',
            interactive: false,
            dataVar: 'json_13_1',
            layerName: 'layer_13_1',
            pane: 'pane_13_1',
            onEachFeature: pop_13_1,
            style: style_13_1_0,
        });
        bounds_group.addLayer(layer_13_1);
        map.addLayer(layer_13_1);
        function pop__2(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">seccion</th>\
                        <td>' + (feature.properties['seccion'] !== null ? autolinker.link(feature.properties['seccion'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">porc_pan15</th>\
                        <td>' + (feature.properties['porc_pan15'] !== null ? autolinker.link(feature.properties['porc_pan15'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">porc_moren</th>\
                        <td>' + (feature.properties['porc_moren'] !== null ? autolinker.link(feature.properties['porc_moren'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">porc_pan18</th>\
                        <td>' + (feature.properties['porc_pan18'] !== null ? autolinker.link(feature.properties['porc_pan18'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">porc_moren_1</th>\
                        <td>' + (feature.properties['porc_moren_1'] !== null ? autolinker.link(feature.properties['porc_moren_1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">panista</th>\
                        <td>' + (feature.properties['panista'] !== null ? autolinker.link(feature.properties['panista'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style__2_0(feature) {
            switch(String(feature.properties['panista'])) {
                case '0':
                    return {
                pane: 'pane__2',
                opacity: 1,
                color: 'rgba(35,35,35,0.10129411764705883)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(222,50,131,0.0)',
                interactive: true,
            }
                    break;
                case '1':
                    return {
                pane: 'pane__2',
                opacity: 1,
                color: 'rgba(35,35,35,0.10129411764705883)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(80,154,232,0.41)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane__2');
        map.getPane('pane__2').style.zIndex = 402;
        map.getPane('pane__2').style['mix-blend-mode'] = 'normal';
        var layer__2 = new L.geoJson(json__2, {
            attribution: '',
            interactive: true,
            dataVar: 'json__2',
            layerName: 'layer__2',
            pane: 'pane__2',
            onEachFeature: pop__2,
            style: style__2_0,
        });
        bounds_group.addLayer(layer__2);
        map.addLayer(layer__2);
        function pop_DistritosFederales_3(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['distrito_f'] !== null ? autolinker.link(feature.properties['distrito_f'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DistritosFederales_3_0() {
            return {
                pane: 'pane_DistritosFederales_3',
                opacity: 1,
                color: 'rgba(51,160,44,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,158,23,0.0)',
                interactive: true,
            }
        }
        map.createPane('pane_DistritosFederales_3');
        map.getPane('pane_DistritosFederales_3').style.zIndex = 403;
        map.getPane('pane_DistritosFederales_3').style['mix-blend-mode'] = 'normal';
        var layer_DistritosFederales_3 = new L.geoJson(json_DistritosFederales_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_DistritosFederales_3',
            layerName: 'layer_DistritosFederales_3',
            pane: 'pane_DistritosFederales_3',
            onEachFeature: pop_DistritosFederales_3,
            style: style_DistritosFederales_3_0,
        });
        bounds_group.addLayer(layer_DistritosFederales_3);
        map.addLayer(layer_DistritosFederales_3);
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="legend/DistritosFederales_3.png" /> Distritos Federales': layer_DistritosFederales_3,'<br /><table><tr><td style="text-align: center;"><img src="legend/_2_0.png" /></td><td></td></tr><tr><td style="text-align: center;"><img src="legend/_2_Panista1.png" /></td><td>Panista</td></tr></table>': layer__2,'1-3<br /><table><tr><td style="text-align: center;"><img src="legend/13_1_SeccionesVisitadas0.png" /></td><td>Secciones Visitadas</td></tr><tr><td style="text-align: center;"><img src="legend/13_1_Seccionessinvisitar1.png" /></td><td>Secciones sin visitar</td></tr></table>': layer_13_1,"Google Maps": layer_GoogleMaps_0,},{collapsed:false}).addTo(map);
        setBounds();
        var i = 0;
        layer_DistritosFederales_3.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['distrito_f'] !== null?String('<div style="color: #33a02c; font-size: 10pt; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['distrito_f']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_DistritosFederales_3'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        resetLabels([layer_DistritosFederales_3]);
        map.on("zoomend", function(){
            resetLabels([layer_DistritosFederales_3]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_DistritosFederales_3]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_DistritosFederales_3]);
        });
        </script>
    </body>
</html>
