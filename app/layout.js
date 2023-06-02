import './globals.css'
import { Inter } from 'next/font/google'

const inter = Inter({ subsets: ['latin'] })

export default function RootLayout ({ children }) {
  return (
    <html lang='en'>
      <body className={inter.className}>{children}</body>
    </html>
  )
}

export async function generateMetadata({ params, searchParams }) {
  searchParams.set('lang', 'en')
  return {
    title : 'Next.js + MDX',
    description: 'Generated by create next app'
  }
}