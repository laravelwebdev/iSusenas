var KonversiPage = {
  template: `
    <div class="container">
      <form class="vue-form" @submit.prevent="submit">
        <div class="error-message">
          <p>Konversi Satuan</p>
        </div>
        <fieldset>
          <div>
            <h4>Pilih Komoditas</h4>
            <p class="select">
              <select class="budget" v-model="komoditas">
                <option value="0">Beras</option>
                <option value="1">Gula</option>
                <option value="2">Jagung</option>
                <option value="3">Kacang Tanah</option>
                <option value="4">Kedelai</option>
                <option value="5">Jagung Pipilan</option>
                <option value="6">Rokok/Sigaret</option>
              </select>
            </p>
          </div>
          <div>
            <h4>Satuan Konversi</h4>
            <p class="select">
              <select class="budget" v-model="indexsat">
                <option v-for="(sat, idx) in konversi[komoditas].satuan" :key="idx" :value="idx">{{ sat }}</option>
              </select>
            </p>
          </div>
          <div>
            <label class="label" for="jumlah">Jumlah</label>
            <input type="number" onClick="this.select()" name="jumlah" id="jumlah" required="" v-model="jumlah" ref="jumlah" min=0>
          </div>
          <div class="success">
            <p>Hasil Konversi</p>
          </div>
          <table>
            <tr>
              <td><label class="label-result">Hasil: </label></td>
              <td class="right"><label class="label-result">{{ total }} {{ std }}</label></td>
            </tr>
          </table>
        </fieldset>
      </form>
    </div>
  `,
  data() {
    return {
      komoditas: "0",
      indexsat: "0",
      jumlah: 0,
      konversi: [
        { satuan: ['Liter', 'Mug Susu', 'Cup/takaran Rice Cooker'], konv: [0.89, 0.297, 0.15], sat: 'Kg' },
        { satuan: ['Kg'], konv: [16], sat: 'Butir' },
        { satuan: ['Kg'], konv: [1.45], sat: 'Kg jagung basah dengan kulit' },
        { satuan: ['Kg'], konv: [0.4], sat: 'Kg kacang tanah tanpa kulit' },
        { satuan: ['Kg'], konv: [0.18], sat: 'Kg Kacang Kedelai' },
        { satuan: ['Seperapat Kilo', 'Setengah Kilo', 'Kg'], konv: [2.5, 5, 10], sat: 'Ons' },
        { satuan: ['Bungkus'], konv: [1.0], sat: 'x 10 atau 12 atau 16 Batang' },
      ]
    };
  },
  computed: {
    total() {
      return (this.jumlah * this.konversi[this.komoditas].konv[this.indexsat]).toFixed(2)
    },
    std() {
      return this.konversi[this.komoditas].sat
    }
  }
};
