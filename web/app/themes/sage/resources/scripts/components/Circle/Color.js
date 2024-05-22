export class Color {

    constructor(hue, saturation, lightness) {
        this.hue = hue;
        this.saturation = saturation;
        this.lightness = lightness;
    }

    toString() {
        return `hsla(${this.hue}, ${this.saturation}%, ${this.lightness}%)`;
    }
}