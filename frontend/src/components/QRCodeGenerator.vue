// QRCodeGenerator.vue

<template>
  <div ref="qrCodeContainer"></div>
</template>

<script>
import QRCodeStyling from "qr-code-styling";

export default {
  props: {
    data: {
      type: String,
      required: true,
    },
    logoUrl: {
      type: String,
      required: true,
    },
  },
  data() {
    return {
      qrCode: null,
    };
  },
  mounted() {
    this.generateQrCode();
  },
  methods: {
    generateQrCode() {
      // Initialize QR Code to match the container size
      this.qrCode = new QRCodeStyling({
        width: 300,
        height: 300,
        data: this.data,
        image: this.logoUrl,
        dotsOptions: {
          color: "#000",
          type: "rounded",
        },
        cornersSquareOptions: {
          color: "#000",
        },
        imageOptions: {
          crossOrigin: "anonymous",
          margin: 5,
        },
      });

      // Append the QR code to the container
      this.qrCode.append(this.$refs.qrCodeContainer);
    },
  },
};
</script>
