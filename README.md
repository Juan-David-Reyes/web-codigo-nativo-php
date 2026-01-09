# web-codigo-nativo-php



ejemplo de uso de la fuente

body {
  font-family: "Inter", system-ui, sans-serif;
  font-size: $body-md-size;
  line-height: $body-md-line-height;
  letter-spacing: $body-md-letter-spacing;
}



modo de uso Headings

h1, h2, h3, h4, h5, h6 {
  font-family: $font-heading-display;
  font-weight: 700;
}

.heading-alt {
  font-family: $font-heading-alt;
}



modo de uso MIXINS de body

p {
  @include body(md);
}

.small {
  @include body(xs);
}

.hero-paragraph {
  @include body(lg);
}