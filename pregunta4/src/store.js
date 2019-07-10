import Vue from 'vue'
import Vuex from 'vuex'
import VuexPersistence from 'vuex-persist'


Vue.use(Vuex);

const vuexLocal = new VuexPersistence({
  storage: window.localStorage
});

export default new Vuex.Store({
  plugins: [vuexLocal.plugin],
  state: {
    data: [
      {
        id: 1,
        title: 'Jason Oner'
      },
      {
        id: 2,
        title: 'Travis Howard'
      },
      {
        id: 3,
        title: 'Ali Connors'
      },
      {
        id: 4,
        title: 'Cindy Baker'
      },
    ],
    index: 5
  },
  getters: {
    items: (state) => {
      return state.data;
    }
  },
  mutations: {
    add (state, value) {
      state.data.push({
        id: state.index,
        title: value,
      });
      state.index += 1;
    },
    del (state, value) {
      const newData = state.data.filter((data) => {
        return data.id != value
      })
      state.data = newData
    },
  },
  actions: {

  }
})
