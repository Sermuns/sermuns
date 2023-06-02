import styles from 'app/page.module.css'

export const metadata = {
  title: 'about'
}

export default function About () {
  return (
    <div className={styles.main}>
      <h1>Om mig</h1>
      <p>
        Jag heter Samuel Åkesson, och är en student på Linköpings universitet
      </p>
      <p>Enligt mig är det väldigt roligt att krångla med saker</p>
    </div>
  )
}
