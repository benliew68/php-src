--TEST--
Test base64_encode() function : basic functionality
--FILE--
<?php
/*
 * Test base64_encode with single byte values.
 */

echo "*** Testing base64_encode() : basic functionality ***\n";

for ($i=0; $i<256; $i++) {
    $str = pack("c", $i);
    $enc = base64_encode($str);
    printf("0x%X: %s\n", $i, $enc);
}

$values = array(
    "Hello World",
    "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!%^&*(){}[]",
    "\n\t Line with control characters\r\n",
    "\xC1\xC2\xC3\xC4\xC5\xC6",
    "\75\76\77\78\79\80",
    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789%!",
    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789%!\75\76\77\78\79\80",
    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789%!ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789%!",
    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789%!ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789%!\75\76\77\78\79\80"
);

foreach($values as $str) {
    $enc = base64_encode($str);
    printf("%s\n", $enc);
    $enc = base64_encode($str, padding: false);
    printf("%s\n", $enc);
}

echo "Done\n";
?>
--EXPECT--
*** Testing base64_encode() : basic functionality ***
0x0: AA==
0x1: AQ==
0x2: Ag==
0x3: Aw==
0x4: BA==
0x5: BQ==
0x6: Bg==
0x7: Bw==
0x8: CA==
0x9: CQ==
0xA: Cg==
0xB: Cw==
0xC: DA==
0xD: DQ==
0xE: Dg==
0xF: Dw==
0x10: EA==
0x11: EQ==
0x12: Eg==
0x13: Ew==
0x14: FA==
0x15: FQ==
0x16: Fg==
0x17: Fw==
0x18: GA==
0x19: GQ==
0x1A: Gg==
0x1B: Gw==
0x1C: HA==
0x1D: HQ==
0x1E: Hg==
0x1F: Hw==
0x20: IA==
0x21: IQ==
0x22: Ig==
0x23: Iw==
0x24: JA==
0x25: JQ==
0x26: Jg==
0x27: Jw==
0x28: KA==
0x29: KQ==
0x2A: Kg==
0x2B: Kw==
0x2C: LA==
0x2D: LQ==
0x2E: Lg==
0x2F: Lw==
0x30: MA==
0x31: MQ==
0x32: Mg==
0x33: Mw==
0x34: NA==
0x35: NQ==
0x36: Ng==
0x37: Nw==
0x38: OA==
0x39: OQ==
0x3A: Og==
0x3B: Ow==
0x3C: PA==
0x3D: PQ==
0x3E: Pg==
0x3F: Pw==
0x40: QA==
0x41: QQ==
0x42: Qg==
0x43: Qw==
0x44: RA==
0x45: RQ==
0x46: Rg==
0x47: Rw==
0x48: SA==
0x49: SQ==
0x4A: Sg==
0x4B: Sw==
0x4C: TA==
0x4D: TQ==
0x4E: Tg==
0x4F: Tw==
0x50: UA==
0x51: UQ==
0x52: Ug==
0x53: Uw==
0x54: VA==
0x55: VQ==
0x56: Vg==
0x57: Vw==
0x58: WA==
0x59: WQ==
0x5A: Wg==
0x5B: Ww==
0x5C: XA==
0x5D: XQ==
0x5E: Xg==
0x5F: Xw==
0x60: YA==
0x61: YQ==
0x62: Yg==
0x63: Yw==
0x64: ZA==
0x65: ZQ==
0x66: Zg==
0x67: Zw==
0x68: aA==
0x69: aQ==
0x6A: ag==
0x6B: aw==
0x6C: bA==
0x6D: bQ==
0x6E: bg==
0x6F: bw==
0x70: cA==
0x71: cQ==
0x72: cg==
0x73: cw==
0x74: dA==
0x75: dQ==
0x76: dg==
0x77: dw==
0x78: eA==
0x79: eQ==
0x7A: eg==
0x7B: ew==
0x7C: fA==
0x7D: fQ==
0x7E: fg==
0x7F: fw==
0x80: gA==
0x81: gQ==
0x82: gg==
0x83: gw==
0x84: hA==
0x85: hQ==
0x86: hg==
0x87: hw==
0x88: iA==
0x89: iQ==
0x8A: ig==
0x8B: iw==
0x8C: jA==
0x8D: jQ==
0x8E: jg==
0x8F: jw==
0x90: kA==
0x91: kQ==
0x92: kg==
0x93: kw==
0x94: lA==
0x95: lQ==
0x96: lg==
0x97: lw==
0x98: mA==
0x99: mQ==
0x9A: mg==
0x9B: mw==
0x9C: nA==
0x9D: nQ==
0x9E: ng==
0x9F: nw==
0xA0: oA==
0xA1: oQ==
0xA2: og==
0xA3: ow==
0xA4: pA==
0xA5: pQ==
0xA6: pg==
0xA7: pw==
0xA8: qA==
0xA9: qQ==
0xAA: qg==
0xAB: qw==
0xAC: rA==
0xAD: rQ==
0xAE: rg==
0xAF: rw==
0xB0: sA==
0xB1: sQ==
0xB2: sg==
0xB3: sw==
0xB4: tA==
0xB5: tQ==
0xB6: tg==
0xB7: tw==
0xB8: uA==
0xB9: uQ==
0xBA: ug==
0xBB: uw==
0xBC: vA==
0xBD: vQ==
0xBE: vg==
0xBF: vw==
0xC0: wA==
0xC1: wQ==
0xC2: wg==
0xC3: ww==
0xC4: xA==
0xC5: xQ==
0xC6: xg==
0xC7: xw==
0xC8: yA==
0xC9: yQ==
0xCA: yg==
0xCB: yw==
0xCC: zA==
0xCD: zQ==
0xCE: zg==
0xCF: zw==
0xD0: 0A==
0xD1: 0Q==
0xD2: 0g==
0xD3: 0w==
0xD4: 1A==
0xD5: 1Q==
0xD6: 1g==
0xD7: 1w==
0xD8: 2A==
0xD9: 2Q==
0xDA: 2g==
0xDB: 2w==
0xDC: 3A==
0xDD: 3Q==
0xDE: 3g==
0xDF: 3w==
0xE0: 4A==
0xE1: 4Q==
0xE2: 4g==
0xE3: 4w==
0xE4: 5A==
0xE5: 5Q==
0xE6: 5g==
0xE7: 5w==
0xE8: 6A==
0xE9: 6Q==
0xEA: 6g==
0xEB: 6w==
0xEC: 7A==
0xED: 7Q==
0xEE: 7g==
0xEF: 7w==
0xF0: 8A==
0xF1: 8Q==
0xF2: 8g==
0xF3: 8w==
0xF4: 9A==
0xF5: 9Q==
0xF6: 9g==
0xF7: 9w==
0xF8: +A==
0xF9: +Q==
0xFA: +g==
0xFB: +w==
0xFC: /A==
0xFD: /Q==
0xFE: /g==
0xFF: /w==
SGVsbG8gV29ybGQ=
SGVsbG8gV29ybGQ
QUJDREVGR0hJSktMTU5PUFFSU1RVVldYWVoxMjM0NTY3ODkwISVeJiooKXt9W10=
QUJDREVGR0hJSktMTU5PUFFSU1RVVldYWVoxMjM0NTY3ODkwISVeJiooKXt9W10
CgkgTGluZSB3aXRoIGNvbnRyb2wgY2hhcmFjdGVycw0K
CgkgTGluZSB3aXRoIGNvbnRyb2wgY2hhcmFjdGVycw0K
wcLDxMXG
wcLDxMXG
PT4/BzgHOVw4MA==
PT4/BzgHOVw4MA
QUJDREVGR0hJSktMTU5PUFFSU1RVVldYWVphYmNkZWZnaGlqa2xtbm9wcXJzdHV2d3h5ejAxMjM0NTY3ODklIQ==
QUJDREVGR0hJSktMTU5PUFFSU1RVVldYWVphYmNkZWZnaGlqa2xtbm9wcXJzdHV2d3h5ejAxMjM0NTY3ODklIQ
QUJDREVGR0hJSktMTU5PUFFSU1RVVldYWVphYmNkZWZnaGlqa2xtbm9wcXJzdHV2d3h5ejAxMjM0NTY3ODklIT0+Pwc4BzlcODA=
QUJDREVGR0hJSktMTU5PUFFSU1RVVldYWVphYmNkZWZnaGlqa2xtbm9wcXJzdHV2d3h5ejAxMjM0NTY3ODklIT0+Pwc4BzlcODA
QUJDREVGR0hJSktMTU5PUFFSU1RVVldYWVphYmNkZWZnaGlqa2xtbm9wcXJzdHV2d3h5ejAxMjM0NTY3ODklIUFCQ0RFRkdISUpLTE1OT1BRUlNUVVZXWFlaYWJjZGVmZ2hpamtsbW5vcHFyc3R1dnd4eXowMTIzNDU2Nzg5JSE=
QUJDREVGR0hJSktMTU5PUFFSU1RVVldYWVphYmNkZWZnaGlqa2xtbm9wcXJzdHV2d3h5ejAxMjM0NTY3ODklIUFCQ0RFRkdISUpLTE1OT1BRUlNUVVZXWFlaYWJjZGVmZ2hpamtsbW5vcHFyc3R1dnd4eXowMTIzNDU2Nzg5JSE
QUJDREVGR0hJSktMTU5PUFFSU1RVVldYWVphYmNkZWZnaGlqa2xtbm9wcXJzdHV2d3h5ejAxMjM0NTY3ODklIUFCQ0RFRkdISUpLTE1OT1BRUlNUVVZXWFlaYWJjZGVmZ2hpamtsbW5vcHFyc3R1dnd4eXowMTIzNDU2Nzg5JSE9Pj8HOAc5XDgw
QUJDREVGR0hJSktMTU5PUFFSU1RVVldYWVphYmNkZWZnaGlqa2xtbm9wcXJzdHV2d3h5ejAxMjM0NTY3ODklIUFCQ0RFRkdISUpLTE1OT1BRUlNUVVZXWFlaYWJjZGVmZ2hpamtsbW5vcHFyc3R1dnd4eXowMTIzNDU2Nzg5JSE9Pj8HOAc5XDgw
Done
