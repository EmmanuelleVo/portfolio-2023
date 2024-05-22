import {Color} from "@scripts/components/Circle/Color";

const color1 = new Color(3,100,75);
const color2 = new Color(29,234,92);
const color3 = new Color(165, 19, 40);
const color4 = new Color(133, 18, 59);


export const settings = {
    canvasHeightRatio: 0.6,
    canvasWidthRatio: 0.8,
    radius: {min: 20, max: 70, default: 30},
    speed: {min: 1, max: 10},
    pointer: {color: "red", alpha: 0, radius: 30},
    gradientColor: [color3, color4],
    colors: [color1, color2],
    defaultColor: "pink"
}