const { createApp, ref } = Vue;

function createFormData(obj) {
  let formData = new FormData();

  for (let item in obj) {
    formData.append(item, obj[item]);
  }

  return formData;
}

createApp({
  setup() {
    const defaultTitle = "Let's run the task!";
    const title = ref(defaultTitle);
    const password = ref('')
    const disableButton = ref(false)

    const runTask = () => {
      title.value = "Running task..."
      disableButton.value = true
      axios
        .post(
          `${baseURL}dev-page/run-task`,
          {
            password: password.value,
          },
          {
            transformRequest: [
              (data) => {
                return createFormData(data);
              },
            ],
          }
        )
        .then(({ data }) => {
          if(data.message === 'Failed') {
            title.value = "There's something wrong. Have you entered the correct password?";
            setTimeout(() => {
              title.value = defaultTitle;
            }, 5000);
          } else {
            setTimeout(() => {
              title.value = "Task completed!"
              setTimeout(() => {
                title.value = defaultTitle
              }, 3000);
            }, 500);
          }
          disableButton.value = false
        })
        .catch(function (error) {
          console.log(error);
        });
    } 
    
    return {
      title,
      password,
      disableButton,
      runTask
    };
  },
}).mount("#app");
