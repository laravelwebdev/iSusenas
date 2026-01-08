Vue.component('home-page', {
  template: `
    <div class="container" style="padding: 20px;">
      <header>
        <h1>iSusenas - Kalkulator</h1>
        <p style="text-align: center; color: white;">Pilih menu di bawah untuk memulai</p>
      </header>
      <div class="row">
        <div class="column">
          <router-link to="/makanan">
            <div class="card green">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAG7AAABuwBHnU4NQAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAACAASURBVHic7L1nlCTZdaD3vTDpffmurvZuvIctDAYgMQsQWAIEqAOKBCHq7OHS6hyuWCsaSKJ2l0ZcFrWkuAQNhMWSwkIEAXIALpYAYQeYwmB8z/T0THtf1eVd+sxw+pGV1WXSRERGZlb39HdOnenJjIh8mRH3vvvuu0ZYlsVtbl7S4xMSsBc4CgwA0Q1/kS3/X+t1gMzaX3bDvzMNXp8FzgBXYmOjZru/423ah7itAG4O0uMTcSpCvvXvMBDo0rCKwDkqymDTX2xsdLVLY7qNA24rgB1GenxCAR4G3gYc44agD3RzXC6oWglngNPA08ALsbFRvaujus0mbiu...">
              <h3>KUANTITAS</h3>
            </div>
          </router-link>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <router-link to="/konversi">
            <div class="card orange">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAHYgAAB2IBOHqZ2wAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAACAASURBVHic7Z13eBzF3YDf2b079W7JarZlW5YsnS2ruEmywXQIJUBCCSVAAoSEEnoaEEjgoxMS+KiB8FFCIMYQQkKI6QbbckOyLKu4N7lLsiSrX9n5/jhdkdV1dyr2vs+j59nZnZ2ZPe38dsqvgI6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo7OKEX4u4L83IzbhVTuEUK+sbKk8pf+rs/XnJOaGtAYbroEyYWAGYhjGH43neOeRmA7iI/tVvG3NeXlh0aiEX5/kQtyMo8AUYBEUaYVFZdv93edviI...">
              <h3>KONVERSI SATUAN</h3>
            </div>
          </router-link>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <router-link to="/bpjs">
            <div class="card blue">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAHYgAAB2IBOHqZ2wAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAABw2SURBVHic7d15lBzlmS/w31PVXd09V2AEBE+OZr0QxQswAqI49ABeWIMaEzxmV41mJR7P8ZLk4xHXC1Ng3KNkkz1xk02iMUbF1YDGRDQmLsP0QEiCgITNalQk4mqCgtxmhpnprstz/uhhgziXqumufrurnu/no3/AW/U+U8z767fergtBCNEvvm9uPXrt00BoBFMj4DYCdAGZmfdU11YspLoAIcoBm+kRAE49YrCfjI+MEd5FZvtYVTUGIaa6ACFKjc3zxgPWKSBM/MtgR36wMwAwBvhs/G0JyywJCQARamyeNx6U6/tUR99/1rj8Xx76n8eJMNHLwVSpjgS...">
              <h3>IURAN BPJS</h3>
            </div>
          </router-link>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <router-link to="/imunisasi">
            <div class="card green">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAHYgAAB2IBOHqZ2wAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAACAASURBVHic7Z13eBzF3YDf2b079W7JarZlW5YsnS2ruEmywXQIJUBCCSVAAoSEEnoaEEjgoxMS+KiB8FFCIMYQQkKI6QbbckOyLKu4N7lLsiSrX9n5/jhdkdV1dyr2vs+j59nZnZ2ZPe38dsqvgI6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo7OKUX4u4L83IzbhVTuEUK+sbKk8pf+rs/XnJOaGtAYbroEyYWAGYhjGH43neOeRmA7iI/tVvG3NeXlh0aiEX5/kQtyMo8AUYBEUaYVFZdv93edviI...">
              <h3>IMUNISASI</h3>
            </div>
          </router-link>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <router-link to="/kesehatan">
            <div class="card red">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAFiQAABYkBbWid+gAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAABQjSURBVHic7d1pcJRlggfw/9v99pHO2blvSCABYuRGUYZBXXWJA7qjKKCOrq5Y64epsnac2Z0P82WPqdrd2qmtmqN2rZ2ZLfEqnZUpdVRQUcALgiABCROOhCSEJJA7fR/vfgixAkJIv308nef5/77Z9tPPn6bfP+/9aoZhIB08v+vPrhFf5Jfdw4HNfWOhTNF5iKbj9XgQy7KjaUBxttM/rzjj5z/dtOyfkhgtJhbRASaN+CK//LJr/Uku/CQjwwD6Rv3O/e0j//jC/31gF51nUtoUQPdwYLPoDETJFolEcTLgflt0jklpUwD8l59UMegJrRSdYVLaFAARpR4...">
              <h3>KESEHATAN</h3>
            </div>
          </router-link>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <router-link to="/pph">
            <div class="card orange">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAFiQAABYkBbWid+gAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAABw2SURBVHic7d55lBzlmS/w31PVXd09V2AEBE+OZr0QxQswAqI49ABeWIMaEzxmV41mJR7P8ZLk4xHXC1Ng3KNkkz1xk02iMUbF1YDGRDQmLsP0QEiCgITNalQk4mqCgtxmhpnprstz/uhhgziXqumufrurnu/no3/AW/U+U8z767fergtBCNEvvm9uPXrt00BoBFMj4DYCdAGZmfdU11YspLoAIcoBm+kRAE49YrCfjI+MEd5FZvtYVTUGIaa6ACFKjc3zxgPWKSBM/MtgR36wMwAwBvhs/G0JyywJCQARamyeNx6U6/tUR99/1rj8Xx76n8eJMNHLwVSpjgS...">
              <h3>PPH</h3>
            </div>
          </router-link>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <router-link to="/listrik">
            <div class="card blue">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAHYgAAB2IBOHqZ2wAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAACAASURBVHic7Z13eBzF3YDf2b079W7JarZlW5YsnS2ruEmywXQIJUBCCSVAAoSEEnoaEEjgoxMS+KiB8FFCIMYQQkKI6QbbckOyLKu4N7lLsiSrX9n5/jhdkdV1dyr2vs+j59nZnZ2ZPe38dsqvgI6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo7OKUX4u4L83IzbhVTuEUK+sbKk8pf+rs/XnJOaGtAYbroEyYWAGYhjGH43neOeRmA7iI/tVvG3NeXlh0aiEX5/kQtyMo8AUYBEUaYVFZdv93edviI...">
              <h3>LISTRIK</h3>
            </div>
          </router-link>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <router-link to="/pdam">
            <div class="card orange">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAHYgAAB2IBOHqZ2wAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAACAASURBVHic7Z13eBzF3YDf2b079W7JarZlW5YsnS2ruEmywXQIJUBCCSVAAoSEEnoaEEjgoxMS+KiB8FFCIMYQQkKI6QbbckOyLKu4N7lLsiSrX9n5/jhdkdV1dyr2vs+j59nZnZ2ZPe38dsqvgI6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo7OKUX4u4L83IzbhVTuEUK+sbKk8pf+rs/XnJOaGtAYbroEyYWAGYhjGH43neOeRmA7iI/tVvG3NeXlh0aiEX5/kQtyMo8AUYBEUaYVFZdv93edviI...">
              <h3>PDAM</h3>
            </div>
          </router-link>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <router-link to="/pbb">
            <div class="card red">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAFiQAABYkBbWid+gAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAB2hSURBVHic7d17nBTlmS/w31PVXd09V2AEBE+OZr0QxQswAqI49ABeWIMaEzxmV41mJR7P8ZLk4xHXC1Ng3KNkkz1xk02iMUbF1YDGRDQmLsP0QEiCgITNalQk4mqCgtxmhpnprstz/uhhgziXqumufrurnu/no3/AW/U+U8z767fergtBCNEvvm9uPXrt00BoBFMj4DYCdAGZmfdU11YspLoAIcoBm+kRAE49YrCfjI+MEd5FZvtYVTUGIaa6ACFKjc3zxgPWKSBM/MtgR36wMwAwBvhs/G0JyywJCQARamyeNx6U6/tUR99/1rj8Xx76n8eJMNHLwVSpjgS...">
              <h3>PBB</h3>
            </div>
          </router-link>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <router-link to="/stnk">
            <div class="card green">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAFiQAABYkBbWid+gAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAB2hSURBVHic7d17nBTlmS/w31PVXd09V2AEBE+OZr0QxQswAqI49ABeWIMaEzxmV41mJR7P8ZLk4xHXC1Ng3KNkkz1xk02iMUbF1YDGRDQmLsP0QEiCgITNalQk4mqCgtxmhpnprstz/uhhgziXqumufrurnu/no3/AW/U+U8z767fergtBCNEvvm9uPXrt00BoBFMj4DYCdAGZmfdU11YspLoAIcoBm+kRAE49YrCfjI+MEd5FZvtYVTUGIaa6ACFKjc3zxgPWKSBM/MtgR36wMwAwBvhs/G0JyywJCQARamyeNx6U6/tUR99/1rj8Xx76n8eJMNHLwVSpjgS...">
              <h3>STNK</h3>
            </div>
          </router-link>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <router-link to="/konsistensi">
            <div class="card blue">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAFiQAABYkBbWid+gAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAABQjSURBVHic7d1pcJRlggfw/9v99pHO2blvSCABYuRGUYZBXXWJA7qjKKCOrq5Y64epsnac2Z0P82WPqdrd2qmtmqN2rZ2ZLfEqnZUpdVRQUcALgiABCROOhCSEJJA7fR/vfgixAkJIv308nef5/77Z9tPPn6bfP+/9aoZhIB08v+vPrhFf5Jfdw4HNfWOhTNF5iKbj9XgQy7KjaUBxttM/rzjj5z/dtOyfkhgtJhbRASaN+CK//LJr/Uku/CQjwwD6Rv3O/e0j//jC/31gF51nUtoUQPdwYLPoDETJFolEcTLgflt0jklpUwD8l59UMegJrRSdYVLaFAARpR4...">
              <h3>KONSISTENSI</h3>
            </div>
          </router-link>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <router-link to="/sekolah">
            <div class="card orange">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAFiQAABYkBbWid+gAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAB2hSURBVHic7d17nBTlmS/w31PVXd09V2AEBE+OZr0QxQswAqI49ABeWIMaEzxmV41mJR7P8ZLk4xHXC1Ng3KNkkz1xk02iMUbF1YDGRDQmLsP0QEiCgITNalQk4mqCgtxmhpnprstz/uhhgziXqumufrurnu/no3/AW/U+U8z767fergtBCNEvvm9uPXrt00BoBFMj4DYCdAGZmfdU11YspLoAIcoBm+kRAE49YrCfjI+MEd5FZvtYVTUGIaa6ACFKjc3zxgPWKSBM/MtgR36wMwAwBvhs/G0JyywJCQARamyeNx6U6/tUR99/1rj8Xx76n8eJMNHLwVSpjgS...">
              <h3>SEKOLAH</h3>
            </div>
          </router-link>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <router-link to="/r502">
            <div class="card green">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAFiQAABYkBbWid+gAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAB2hSURBVHic7d17nBTlmS/w31PVXd09V2AEBE+OZr0QxQswAqI49ABeWIMaEzxmV41mJR7P8ZLk4xHXC1Ng3KNkkz1xk02iMUbF1YDGRDQmLsP0QEiCgITNalQk4mqCgtxmhpnprstz/uhhgziXqumufrurnu/no3/AW/U+U8z767fergtBCNEvvm9uPXrt00BoBFMj4DYCdAGZmfdU11YspLoAIcoBm+kRAE49YrCfjI+MEd5FZvtYVTUGIaa6ACFKjc3zxgPWKSBM/MtgR36wMwAwBvhs/G0JyywJCQARamyeNx6U6/tUR99/1rj8Xx76n8eJMNHLwVSpjgS...">
              <h3>R502</h3>
            </div>
          </router-link>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <router-link to="/oop">
            <div class="card red">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAHYgAAB2IBOHqZ2wAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAACAASURBVHic7Z13eBzF3YDf2b079W7JarZlW5YsnS2ruEmywXQIJUBCCSVAAoSEEnoaEEjgoxMS+KiB8FFCIMYQQkKI6QbbckOyLKu4N7lLsiSrX9n5/jhdkdV1dyr2vs+j59nZnZ2ZPe38dsqvgI6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo6Ojo7OKUX4u4L83IzbhVTuEUK+sbKk8pf+rs/XnJOaGtAYbroEyYWAGYhjGH43neOeRmA7iI/tVvG3NeXlh0aiEX5/kQtyMo8AUYBEUaYVFZdv93edviI...">
              <h3>OOP</h3>
            </div>
          </router-link>
        </div>
      </div>
    </div>
  `,
  data() {
    return {}
  }
});

var HomeComponent = {
  template: '<home-page></home-page>'
};

export default HomeComponent;
