/*
* Kendo UI Complete v2013.2.918 (http://kendoui.com)
* Copyright 2013 Telerik AD. All rights reserved.
*
* Kendo UI Complete commercial licenses may be obtained at
* https://www.kendoui.com/purchase/license-agreement/kendo-ui-complete-commercial.aspx
* If you do not own a commercial license, this file shall be governed by the trial license terms.
*/
﻿(function( window, undefined ) {
    kendo.cultures["fil-PH"] = {
        name: "fil-PH",
        numberFormat: {
            pattern: ["-n"],
            decimals: 2,
            ",": ",",
            ".": ".",
            groupSize: [3],
            percent: {
                pattern: ["-n %","n %"],
                decimals: 2,
                ",": ",",
                ".": ".",
                groupSize: [3],
                symbol: "%"
            },
            currency: {
                pattern: ["($n)","$n"],
                decimals: 2,
                ",": ",",
                ".": ".",
                groupSize: [3],
                symbol: "PhP"
            }
        },
        calendars: {
            standard: {
                days: {
                    names: ["Linggo","Lunes","Martes","Mierkoles","Huebes","Biernes","Sabado"],
                    namesAbbr: ["Lin","Lun","Mar","Mier","Hueb","Bier","Saba"],
                    namesShort: ["L","L","M","M","H","B","S"]
                },
                months: {
                    names: ["Enero","Pebrero","Marso","Abril","Mayo","Hunyo","Hulyo","Agosto","Septyembre","Oktubre","Nobyembre","Disyembre",""],
                    namesAbbr: ["En","Peb","Mar","Abr","Mayo","Hun","Hul","Agos","Sept","Okt","Nob","Dis",""]
                },
                AM: ["AM","am","AM"],
                PM: ["PM","pm","PM"],
                patterns: {
                    d: "M/d/yyyy",
                    D: "dddd, MMMM dd, yyyy",
                    F: "dddd, MMMM dd, yyyy h:mm:ss tt",
                    g: "M/d/yyyy h:mm tt",
                    G: "M/d/yyyy h:mm:ss tt",
                    m: "MMMM dd",
                    M: "MMMM dd",
                    s: "yyyy'-'MM'-'dd'T'HH':'mm':'ss",
                    t: "h:mm tt",
                    T: "h:mm:ss tt",
                    u: "yyyy'-'MM'-'dd HH':'mm':'ss'Z'",
                    y: "MMMM, yyyy",
                    Y: "MMMM, yyyy"
                },
                "/": "/",
                ":": ":",
                firstDay: 0
            }
        }
    }
})(this);
